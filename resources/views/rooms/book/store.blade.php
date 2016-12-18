@extends('layouts.master')

@section('mainContent')
<div class="pure-g">
  <div class="pure-u-1-3">
    <img src="{{ $room->image_link }}" class="image-size">
  </div>
  <div class="pure-u-2-3">
    <br>
    <div class="view-rooms-lorem">
      <h3>Thank you!</h3>
      <br><br>
      <h4>You have booked room {{ $room->room_number }} from {{ $startDate }} to {{ $endDate }}.</h4>
    </div>

  </div>
</div>
@endsection
