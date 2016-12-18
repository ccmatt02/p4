@extends('layouts.master')

@section('mainContent')

<ul>
@foreach ($rooms as $room)
    <li>
      <img src="{{ $room->image_link }}" class="room-small-image">
      <div class="short-desc">
        {{ $room->description }}
      </div>
      <div class="short-desc">
        <a href="/rooms/show/{{ $room->room_number }}">
          View room #{{ $room->room_number }}
        </a>
      </div>
    </li>
    <br><br>
@endforeach
</ul>

@endsection
