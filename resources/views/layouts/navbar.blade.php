<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ url('main') }}">Car<span>Book</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{ request()->is('landing') ? 'active' : '' }}"><a href="{{ url('main') }}" class="nav-link">Home</a></li>
          <li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a href="{{ url('about') }}" class="nav-link">About</a></li>
          <li class="nav-item {{ request()->is('services') ? 'active' : '' }}"><a href="{{ url('services') }}" class="nav-link">Services</a></li>
          <li class="nav-item {{ request()->is('pricing') ? 'active' : '' }}"><a href="{{ url('pricing') }}" class="nav-link">Pricing</a></li>
          <li class="nav-item {{ request()->is('car') ? 'active' : '' }}"><a href="{{ url('carslist') }}" class="nav-link">Cars</a></li>
          <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
          <li class="nav-item {{ request()->is('login') ? 'active' : '' }}">
          @if (auth()->check())
            <a class="nav-link"> Hai {{Auth::user()->username}} </a>
          @else
          <a href="{{ url('login') }}" class="nav-link"><p>Login/Register</p></a>
          @endif</li>
        </ul>
      </div>
    </div>
  </nav>

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
    