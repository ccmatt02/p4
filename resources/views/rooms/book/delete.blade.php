@extends('layouts.master')

@section('mainContent')

<div class="pure-g">
  <div class="pure-u-1-3">
    <img src="{{ $room->image_link }}" class="image-size">
  </div>
  <div class="pure-u-2-3">
    <br>
    <div class="view-rooms-lorem">
      Your booking of room {{ $room->room_number }}<br><br><br>
      <h4>From:</h4> {{ $startDate }} through {{ $endDate }} <br><br>
      <br><br>
      <h4>Has been canceled</h4>

  </div>
</div>

@endsection
