<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon;
use Auth;
use DB;
use App\Rooms_users;

class RoomController extends Controller {

  public function index()
  {
    $rooms = DB::table('rooms')->get();
    return view('rooms.index')->with('rooms', $rooms);
  }

  public function create($room_number)
  {
    $room = DB::table('rooms')->where('room_number', 'LIKE', $room_number)->first();
    return view('rooms.show.create')->with('room', $room);
  }

  public function store(Request $request)
  {
    $startDate = date("Y-m-d", strtotime($request->input('startDate')));
    $endDate = date("Y-m-d", strtotime($request->input('endDate')));
    $room_id = DB::table('rooms')->where('room_number', 'LIKE', $request->input('room_number'))->first()->id;

    DB::table('rooms_users')->insert([
      'created_at' => Carbon\Carbon::now()->toDateTimeString(),
      'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
      'room_id' => $room_id,
      'user_id' => Auth::user()->id,
      'check_in' => $startDate,
      'check_out' => $endDate
    ]);

    $room = DB::table('rooms')->where('id', 'LIKE', $room_id )->first();
    return view('rooms.book.store')->with('room', $room)->with('startDate', $startDate)->with('endDate', $endDate);
  }

  public function show()
  {
    $bookings = DB::table('rooms_users')->where('user_id', 'LIKE', Auth::user()->id)->get();
    $rooms = DB::table('rooms')->get();

    return view('rooms.book.show')->with('bookings', $bookings)->with('rooms', $rooms);
  }

  public function update($booking_id)
  {
    $booking = DB::table('rooms_users')->where('id', 'LIKE', $booking_id)->first();
    $room = DB::table('rooms')->where('id', 'LIKE', $booking->room_id )->first();
    return view('rooms.book.update')->with('booking', $booking)->with('room', $room);
  }

  public function alter(Request $request, $booking_id)
  {
    $booking = Rooms_users::where('id', 'LIKE', $booking_id)->first();
    $startDate = date("Y-m-d", strtotime($request->input('startDate')));
    $endDate = date("Y-m-d", strtotime($request->input('endDate')));
    $room = DB::table('rooms')->where('id', 'LIKE', $booking->room_id)->first();

    $booking->check_in = $startDate;
    $booking->check_out = $endDate;
    $booking->save();

    return view('rooms.book.alter')->with('oldStart', $request->input('oldStart'))->with('oldEnd', $request->input('oldEnd'))
      ->with('booking', $booking)->with('room', $room);
  }

  public function delete($booking_id)
  {
    $booking = Rooms_users::where('id', 'LIKE', $booking_id)->first();
    $room = DB::table('rooms')->where('id', 'LIKE', $booking->room_id)->first();
    $startDate = $booking->check_in;
    $endDate = $booking->check_out;

    $booking->delete();

    return view('rooms.book.delete')->with('room', $room)->with('startDate', $startDate)->with('endDate', $endDate);
  }

  /*
  public function index()
  {
    return view('index');
  }

  public function generate(Request $request) {

    $this->validate($request, [
      'paragraphNumber' => 'required|min:1|max:20|numeric',
      'wordNumber' => 'required|min:1|max:500|numeric',
    ]);

    $parNum = $request->input('paragraphNumber');
    $wordNum = $request->input('wordNumber');
    return view('lorem')->with('parNum', $parNum)->with('wordNum', $wordNum);
  }

  public function user(Request $request) {

    $this->validate($request, [
      'userNumber' => 'required|min:1|max:20|numeric',
    ]);

    $userNum = $request->input('userNumber');
    $birthday = $request->input('birthday');
    $idnum = $request->input('idnum');
    $address = $request->input('address');

    return view('user')->with('userNum', $userNum)->with('birthday', $birthday)->with('idnum', $idnum)->with('address', $address);
  }
  */
}
