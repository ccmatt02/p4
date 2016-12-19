<!doctype html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link href="/css/app.css" rel="stylesheet">

  <!-- Scripts -->
  <script>
      window.Laravel = <?php echo json_encode([
          'csrfToken' => csrf_token(),
      ]); ?>
  </script>


	<title>Not a Fake Bed and Breakfast</title>
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
          Bed and Breakfast
        </p>
      </div>
    </div>
	</a>
@yield('content')

 <footer> <BR><BR> @yield('footer') </footer>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
