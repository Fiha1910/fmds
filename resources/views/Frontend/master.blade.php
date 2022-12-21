
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Franchise Management & Distribution System</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{url('frontend/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css/')}}">
			<link rel="stylesheet" href="{{url('frontend/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{url('frontend/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{url('frontend/css/nice-select.css')}}css/nice-select.cs">					
			<link rel="stylesheet" href="{{url('frontend/css/animate.min.css')}}">
			<link rel="stylesheet" href="{{url('frontend/css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{url('frontend/css/main.css')}}">
			@notifyCss
		</head>
		<body>
		@include('notify::components.notify')
            @include('frontend.fixed.header')

			<!-- #header -->
<!-- start banner Area -->
<section class="banner-area" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-7">
							<h6 class="text-white text-uppercase">Now you can feel the Energy</h6>
							<h1>
								Fresh,Save <br>
								Quality			
							</h1>
							<a href="#" class="primary-btn text-uppercase"></a>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->
            <section class="">
				<div class="container">
					<div class="container">
					@yield('content')
					</div>
				</div>
			</section>
			
			<!-- start footer Area -->		
            @include('frontend.fixed.footer')
				
			<!-- End footer Area -->	

			<script src="{{url('frontend/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{url('frontend/js/vendor/bootstrap.min.js')}}"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{url('frontend/js/easing.min.js')}}"></script>			
			<script src="{{url('frontend/js/hoverIntent.js')}}"></script>
			<script src="{{url('frontend/js/superfish.min.js')}}"></script>	
			<script src="{{url('frontend/js/jquery.ajaxchimp.min.js')}}js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>			
			<script src="{{url('/frontend/js/jquery.sticky.js')}}"></script>
			<script src="{{url('frontend/js/jquery.nice-select.min.js')}}"></script>			
			<script src="{{url('frontend/js/parallax.min.js')}}"></script>	
			<script src="{{url('frontend/js/waypoints.min.js')}}"></script>
			<script src="{{url('frontend/js/jquery.counterup.min.js')}}"></script>					
			<script src="{{url('frontend/js/mail-script.js')}}"></script>	
			<script src="{{url('frontend/js/main.js')}}"></script>	
			@notifyJs
		</body>
	</html>



