
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@if(isset($title)) {{$title}} @else() Bk Entrprice @endif() </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="f" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700" rel="stylesheet">
	
	<link href=" {{ asset('site/css/font-awesome.min.css') }}" rel="stylesheet" />    

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('site/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('site/css/icomoon.css') }}" >
	<!-- Bootstrap  -->
	 <link rel="stylesheet"  href="{{ asset('site/css/bootstrap.min.css') }}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('site/css/flexslider.css') }}">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('site/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('site/css/owl.theme.default.min.css') }}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('site/css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('site/js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

 
  










	</head>
	<body>
		
	<div id="fh5co-page">
	
	@yield('content')

		<footer id="fh5co-footer" role="contentinfo">
	
			<div class="container">
				<div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<h3>About Us</h3>
					<p>{{$footer->about}}</p>
					<p><a href="/about" class="btn btn-primary btn-outline with-arrow btn-sm">Join Us <i class="icon-arrow-right"></i></a></p>
				</div>
				<div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<h3>Our Services</h3>
					@foreach($services->chunk(4) as $set)
					<ul class="float">
						@foreach($set as $service)
							<li><a href="/services/{{str_replace(' ','-',$service->name)}}">{{ $service->name }}</a></li>
						@endforeach()
					</ul>
					@endforeach
				</div>

				<div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
					<h3>Follow Us</h3>
					<ul class="fh5co-social">
						<li><a href="{{$footer->tw}}" target="_blank"><i class="icon-twitter"></i></a></li>
						<li><a href="{{$footer->fb}}" target="_blank"><i class="icon-facebook"></i></a></li>
						<li><a href="{{$footer->google}}" target="_blank"><i class="icon-google-plus"></i></a></li>
						<li><a href="{{$footer->ins}}" target="_blank"><i class="icon-instagram"></i></a></li>
					</ul>
				</div>
				
				
				<div class="col-md-12 fh5co-copyright text-center">
					<p>&copy; 2016 Copyright &copy; BK Enterprise. All Rights Reserved. <span>Development by <a href="https://www.facebook.com/NoExcuseee" target="_blank">Marwan Mohamed</a> </span></p>	
				</div>
				
			</div>
	</footer>
	</div>
	
	
	<!-- jQuery -->
    <script src="{{ asset('site/js/jquery-1.11.2.min.js') }}"></script>    
	<!-- jQuery Easing -->
	<script src="{{ asset('site/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('site/js/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('site/js/jquery.flexslider-min.js') }}"></script>
	<!-- MAIN JS -->
    <script src="{{ asset('site/js/animate-plus.min.js') }}"></script>    
	<!-- Owl Carousel -->
	<script src="{{ asset('site/js/main.js') }}"></script>
	<script src="{{ asset('site/js/owl.carousel.min.js') }}"></script>
	</body>
</html>