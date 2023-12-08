<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/landingcss/css/open-iconic-bootstrap.min.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landingcss/css/animate.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landingcss/css/owl.carousel.min.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landingcss/css/owl.theme.default.min.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landingcss/css/magnific-popup.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landingcss/css/aos.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landingcss/css/ionicons.min.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landingcss/css/bootstrap-datepicker.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landingcss/css/jquery.timepicker.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landingcss/css/flaticon.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landingcss/css/icomoon.css')}} ">
    <link rel="stylesheet" href="{{asset('css/landingcss/css/style.css')}} ">
  </head>
  <body>
    @include('layouts.navbar')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/landing/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{route('main')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Our Services</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-3">Our Latest Services</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Wedding Ceremony</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">City Transfer</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Airport Transfer</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Whole City Tour</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="ftco-section ftco-intro" style="background-image: url(images/landing/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6 heading-section heading-section-white ftco-animate">
            <h2 class="mb-3">Do You Want To Earn With Us? So Don't Be Late.</h2>
            <a href="#" class="btn btn-primary btn-lg">Become A Driver</a>
          </div>
				</div>
			</div>
		</section> 
    @include('layouts.footer')

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script>  console.log("Hello world!");</script>
  <script src="{{asset('js/landingjs/js/jquery.min.js')}}  "></script>
  <script src="{{asset('js/landingjs/js/jquery-migrate-3.0.1.min.js')}}  "></script>
  <script src="{{asset('js/landingjs/js/popper.min.js')}}  "></script>
  <script src="{{asset('js/landingjs/js/bootstrap.min.js')}}  "></script>
  <script src="{{asset('js/landingjs/js/jquery.easing.1.3.js')}}  "></script>
  <script src="{{asset('js/landingjs/js/jquery.waypoints.min.js')}}  "></script>
  <script src="{{asset('js/landingjs/js/jquery.stellar.min.js')}}  "></script>
  <script src="{{asset('js/landingjs/js/owl.carousel.min.js')}}  "></script>
  <script src="{{asset('js/landingjs/js/jquery.magnific-popup.min.js')}}  "></script>
  <script src="{{asset('js/landingjs/js/aos.js')}}  "></script>
  <script src="{{asset('js/landingjs/js/jquery.animateNumber.min.js')}}  "></script>
  <script src="{{asset('js/landingjs/js/bootstrap-datepicker.js')}}  "></script>
  <script src="{{asset('js/landingjs/js/jquery.timepicker.min.js')}}  "></script>
  <script src="{{asset('js/landingjs/js/scrollax.min.js')}}  "></script>
  <script src="{{asset('js/landingjs/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}  "></script>
  <script src="{{asset('js/landingjs/js/google-map.js')}}  "></script>
  <script src="{{asset('js/landingjs/js/main.js')}}  "></script>
  </body>
</html>