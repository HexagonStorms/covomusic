<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width" />
	<meta name="author" content="Josue Plaza">
	<meta property="og:title" content="Covo">
	<meta property="og:type" content="website">
	<meta property="og:url" content="http://www.covomusic.com">
	<meta property="og:site_name" content="Josue Plaza">
	<meta property="og:description" content="Covo game music composer">
	<meta name="keywords" content="Covo, Josue, Plaza, game, music, composer">
	<link rel="shortcut icon" href="#" />

    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- BlackTie theme template styles -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Josue Plaza's custom styles -->
    <link href="assets/css/josuestyle.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">INSTANT</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="#works">Work</a></li>
            <li><a href="#works">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    @yield('content')

    <!-- Footer -->
	<div id="footerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-4">
					<p>Copyright &copy; {{ date("Y") }}. All Rights Reserved.</p>
				</div>
			
				<div class="col-lg-4">
					<p><a href="https://twitter.com/plazajosue"><i class="fa fa-twitter-square fa-2x"></i></a>
          <a href="https://soundcloud.com/covoofficial"><i class="fa fa-soundcloud fa-2x"></i></a>
          <a href="mailto:covomusic@gmail.com?Subject=Hello%20Covo" target="_top"><i class="fa fa-envelope-square fa-2x"></i></a></p>
				</div>
				<div class="col-lg-4">
					<p>covomusic@gmail.com</p>
				</div>
			</div>
		</div>
	</div>
	


    <!-- Bootstrap  JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
