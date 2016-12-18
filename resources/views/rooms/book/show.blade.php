@extends('layouts.master')

@section('mainContent')

<ul>
@foreach ($bookings as $booking)
    <li>
      <img src="
      @foreach($rooms as $room)
        @if($room->id == $booking->room_id)
          {{ $room->image_link }}
        @endif
      @endforeach
      " class="room-small-image">
      <div class="short-desc">
        You have booked room
        @foreach($rooms as $room)
          @if($room->id == $booking->room_id)
            {{ $room->room_number }}
          @endif
        @endforeach
        from {{ $booking->check_in}} to {{ $booking->check_out }}
      </div>
      <div class="short-desc">
        <a href="/rooms/book/{{ $booking->id }}">
          Alter or cancel this booking.
        </a>
      </div>
    </li>
    <br><br>
@endforeach
</ul>

@endsection
