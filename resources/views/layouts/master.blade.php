<!doctype html>
<html>
<head>

	<title>@yield('title')</title>
	<meta charset='utf-8'>

  	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link href='/css/main.css' rel='stylesheet'>

    @yield('addToHead')
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
        @if(Auth::check())
          <a href="/logout">
            <div class="logout-text">
              Logout
            </div>
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
