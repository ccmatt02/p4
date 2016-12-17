<!doctype html>
<html>
<head>

	<title>@yield('title')</title>
	<meta charset='utf-8'>

  	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link href='css/main.css' rel='stylesheet'>


</head>
<body>
	<a href='/'>
	  <div class="banner">
          <div class="banner-head">
            <p>
            Not a Fake<BR>
              Bed and Breakfast</p>
          </div>

        <div class="topcorner">
        <!-- <div class="pure-u-1-5">
          <form class="pure-form">
            <fieldset class="pure-group">
              <input type="text" class="pure-input-1-2" placeholder="Email">
              <input type="text" class="pure-input-1-2" placeholder="Password">
              <button type="submit" class="pure-button pure-input-1-2 pure-button-primary">Login</button>
            </fieldset>
          </form>
        </div> -->
        @if(Auth::check())
          <a href="/logout">
            Logout
          </a>
        @else
          <form method="POST" action="{{ url('/login') }}" class="pure-form">
            <fieldset class="pure-group">
            {{ csrf_field() }}
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email" class="pure-input-1">
            <input id="password" type="password" name="password" required placeholder="Password" class="pure-input-1">
            <button type="submit" class="pure-button pure-input-1 pure-button-primary">
              Login
            </button>
            <a href="{{ url('/password/reset') }}">
              Forgot Your Password?
            </a>
          </fieldset>
          </form>
        @endif
        </div>
      </div>
	</a>
@yield('mainContent')

 <footer> <BR><BR> @yield('footer') </footer>
</body>
</html>