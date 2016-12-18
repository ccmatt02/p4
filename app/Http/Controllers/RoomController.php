<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon;
use Auth;
use DB;

class RoomController extends Controller {

  public function index()
  {
    $rooms = DB::table('rooms')->get();
    return view('rooms.index')->with('rooms', $rooms);
  }

  public function create($room_number)
  {
    $rooms = DB::table('rooms')->where('room_number', 'LIKE', $room_number)->first();
    return view('rooms.show.create')->with('rooms', $rooms);
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
