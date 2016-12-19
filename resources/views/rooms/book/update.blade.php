@extends('layouts.master')

@section('addToHead')
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  $(document).ready(function() {
    $("#datepickerEnd").datepicker();
  });
  </script>
@endsection

@section('mainContent')
<div class="pure-g">
  <div class="pure-u-1-3">
    <img src="{{ $room->image_link }}" class="image-size">
  </div>
  <div class="pure-u-2-3">
    <br>
    <div class="view-rooms-lorem">
      You currently have room {{ $room->room_number }} booked from {{ $booking->check_in }} to {{ $booking->check_out }}
      <br><br>
      <h4>Change the dates of this booking</h4>
      <br>
      <form method="POST" action="/rooms/book/{{ $booking->id }}" class="pure-form">
        {{ csrf_field() }}
        <input id="datepicker" name="startDate" placeholder="Check In">
        <input id="datepickerEnd" name="endDate" placeholder="Check Out">
        <input type="hidden" name="oldStart" value="{{ $booking->check_in }}">
        <input type="hidden" name="oldEnd" value="{{ $booking->check_out }}">
        <button type="submit" class="pure-button pure-button-primary">
          Change
        </button>
      </form>
      <br><br>
      <a href="/rooms/book/delete/{{ $booking->id }}">
        <div class="logout-text">
          Cancel this booking
        </div>
      </a>
    </div>

  </div>
</div>

@endsection
