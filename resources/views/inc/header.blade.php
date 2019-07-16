<!doctype html>

<html class="no-js" lang="zxx">

<head>

    	<!-- metas -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       	<meta name="description" content="{{ $meta->description }}">
		<meta name="keywords" content="{{ $meta->keywords }}">

		<!-- title -->
		@if (Request::path() == 'blog')
		<title>Blog :: {{ Request::server ("SERVER_NAME") }}</title>	
		@endif
		@if (isset($post))
		<title>{{ $post->title }} - {{ Request::server ("SERVER_NAME") }}</title>	
		@endif
		@if (isset($postcategory))
		<title>{{ $postcategory->name }} - {{ Request::server ("SERVER_NAME") }}</title>	
		@endif

		<!-- favicon -->
        <link href="{{ asset('img/favicon.ico') }}" rel="icon" type="image/png">

        <!-- bootstrap css -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

		<!-- google fonts -->
		<link href="{{ asset('fonts/css3ce6.css?family=Montserrat:200,300,400,500,600,700,800,900') }}" rel="stylesheet">
		<link href="{{ asset('fonts/css3f91.css?family=Poppins:200,300,400,500,600,700,800') }}" rel="stylesheet">

		<!-- owl carousel CSS -->
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

		<!-- magnific-popup CSS -->
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

		<!-- animate.min CSS -->
		<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">

		<!-- Font Icon Core CSS -->
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/et-line.css') }}">

		<!-- Core Style Css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!--[if lt IE 9]-->
		<script src="{{ asset('js/html5shiv.min.js')}}"></script>
		<!--[endif]-->

    </head>

    <body>

    	<!-- ====== Preloader ======  -->
	    <div class="loading">
			<div class="load-circle">
			</div>
		</div>
		<!-- ======End Preloader ======  -->

		<!-- ====== Navgition ======  -->
		<nav class="navbar navbar-default">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-icon-collapse" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>

		       <!-- logo -->
		      <a class="logo" href="#">{{ $header->name }}</a>

		    </div>

		    <!-- Collect the nav links, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="nav-icon-collapse">

			  <!-- links -->
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="{{ url('/') }}">Home</a></li>
		        <li><a href="{{ url('/') }}">About</a></li>
		        <li><a href="{{ url('/') }}">Services</a></li>
		        <li><a href="{{ url('/') }}">Works</a></li>
		        <li><a href="{{ url('/') }}">Clients</a></li>
		        <li><a href="{{ url('/blog') }}">Blog</a></li>
		        <li><a href="{{ url('/') }}">Contact</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container -->
		</nav>
		<!-- ====== End Navgition ======  -->