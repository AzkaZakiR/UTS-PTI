<!DOCTYPE html>
<head>
    <title>Masuk</title>
    <link rel="stylesheet" href="{{ asset('css/masuk.css')}}">
	{{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
</head>
<body>
	@if(session('error'))
	{{-- <div class="alert alert-danger">
		<b>Opps!</b> {{session('error')}}
	</div>  --}}
	<div class="alert alert-error">
		<div class="icon__wrapper">
		  <span class="mdi mdi-alert-outline"></span>
		</div>
		<h3>{{session('error')}}</h3>
        <span class="mdi mdi-close close" onclick="closeAlert()"></span>
	  </div>
	@endif
	@if(session('message'))
	<div class="alert alert-success">
		<div class="icon__wrapper">
		  <span class="mdi mdi-alert-outline"></span>
		</div>
		<h3>{{session('message')}}</h3>
        <span class="mdi mdi-close close" onclick="closeAlert()"></span>
	  </div>
	@endif
	<div class="container" id="container">
	{{-- @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
     @endif --}}
	 @if(session('error'))
	 <div class="alert alert-danger">
		<b>Opps!</b> {{session('error')}}
	</div> 
     @endif
	<div class="form-container sign-up-container">
		<form action="{{ route('actionregister')}}" method="POST">
			@csrf
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Username" name="username" />
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password" name="password"/>
			<div class="form-group">
				<label><i class="fa fa-address-book"></i> Role</label>
				<input type="text" name="roles" class="form-control" value="Guest" readonly>
			</div>
			<button class="register">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
       
		<form action="{{ route('actionlogin')}}" method="post">
            @csrf
			<h1 >Sign in</h1>
            
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="text" placeholder="Email or Username" name="email" />
			<input type="password" placeholder="Password" name="password"/>
			<a href="#">Forgot your password?</a>
			<button  class="login">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="setan" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="hantu" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<Script>
	function closeAlert() {
		document.querySelector('.alert-error').style.display = 'none';
	}
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</Script>
</body>
</html>