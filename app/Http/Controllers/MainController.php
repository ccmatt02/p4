<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoremControllers extends Controller {
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
}
