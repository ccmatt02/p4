@extends('layouts.master')

@section('mainContent')

<div class="pure-g">
  <div class="pure-u-1-3">
    <img src="{{ $room->image_link }}" class="image-size">
  </div>
  <div class="pure-u-2-3">
    <br>
    <div class="view-rooms-lorem">
      Your booking of room {{ $room->room_number }} has been changed.<br><br><br>
      <h4>From:</h4> {{ $oldStart }} through {{ $oldEnd }} <br><br>
      <h4>To:</h4> {{ $booking->check_in}} through {{ $booking->check_out }}
      <br><br>
      <div class="short-desc">
        <a href="/rooms/book/{{ $booking->id }}">
          Alter or cancel this booking.
    </div>

  </div>
</div>

@endsection
