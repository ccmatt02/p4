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
       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis istud, quaeso, nesciebat? <br>
      Qui convenit? Quis hoc dicit? Prave, nequiter, turpiter cenabat; Praeteritis, inquit, gaudeo. Quid<br>
      iudicant sensus? Cur id non ita fit? Tamen a proposito, inquam, aberramus. Primum quid tu dicis breve?<br>
      At eum nihili facit; Easdemne res? Ubi ut eam caperet aut quando? Sin aliud quid voles, postea. At enim<br>
      hic etiam dolore. Si longus, levis. Quare attende, quaeso. Minime vero, inquit ille, consentit. Deinde<br>
      dolorem quem maximum? Graece donan, Latine voluptatem vocant. Primum divisit ineleganter; At multis se<br>
      probavit. Non est igitur voluptas bonum. Sic consequentibus vestris sublatis prima tolluntur.

      <br><br>
      @if(Auth::check())
        <form method="POST" action="/rooms/book" class="pure-form">
          {{ csrf_field() }}
          <input id="datepicker" name="startDate" placeholder="Check In">
          <input id="datepickerEnd" name="endDate" placeholder="Check Out">
          <input type="hidden" name="room_number" value="{{ $room->room_number }}">
          <button type="submit" class="pure-button pure-button-primary">
            Book!
          </button>
        </form>
      @else
      <br>
      <h3> Login to book this room! </h3>
      @endif
    </div>

  </div>
</div>
@endsection

@section('footer')

@endsection
