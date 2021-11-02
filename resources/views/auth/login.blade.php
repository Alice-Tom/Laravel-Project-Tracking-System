<!DOCTYPE html>
<html lang="en">
<head>
<title>PTS - Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="pts template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{secure_asset('styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{secure_asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{secure_asset('plugins/OwlCarousel2-2.3.4/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{secure_asset('plugins/OwlCarousel2-2.3.4/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{secure_asset('plugins/OwlCarousel2-2.3.4/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{secure_asset('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{secure_asset('styles/responsive.css')}}">
 {{-- icon --}}
 <link rel="apple-touch-icon" sizes="180x180" href="{{ secure_asset('images/apple-touch-icon.png')}}?v={{ date('YmdHis') }}">
 <link rel="icon" type="image/png" sizes="32x32" href="{{ secure_asset('images/favicon-32x32.png')}}?v={{ date('YmdHis') }}">
 <link rel="icon" type="image/png" sizes="16x16" href="{{ secure_asset('images/favicon-16x16.png')}}?v={{ date('YmdHis') }}">
 <link rel="manifest" href="{{ secure_asset('site.webmanifest')}}?v={{ date('YmdHis') }}">


</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_wrap d-flex flex-row align-items-center justify-content-center">
			
			<!-- Logo -->
			<div class="logo"><a href="/"><img src="images/favicon-32x32.png" alt=""></a></div>

			<!-- Main Nav -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-center">
					<li><a href="/">home</a></li>
					<li><a href="about.html">about</a></li>
					<li class="active"><a href="login">login</a></li>
					<li>
						<div class="dropdown dropdown-menu-right">
							<a href="register" dropdown-toggle href="#" id="dropdownMenuLink" data-toggle="dropdown">register</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" id="list_dropdown" href="/register?registration_type=employee">EMPLOYEE</a>
								<a class="dropdown-item" id="list_dropdown" href="/register?registration_type=manager">MANAGER</a>
							</div>
						</div>
					</li>
				</ul>
			</nav>

			<!-- Hamburger -->
			<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

		</div>
	</header>

	<!-- Fixed Header -->

	<header class="fixed_header">
		<div class="header_wrap d-flex flex-row align-items-center justify-content-center">
			
			<!-- Logo -->
			<div class="logo"><a href="/"><img src="images/favicon-32x32.png" alt=""></a></div>

			<!-- Main Nav -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-center">
					<li><a href="/">home</a></li>
					<li><a href="about.html">about</a></li>
					<li class="active"><a href="login">login</a></li>
					<li>
						<div class="dropdown dropdown-menu-right">
							<a href="register" dropdown-toggle href="#" id="dropdownMenuLink" data-toggle="dropdown">register</a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" id="list_dropdown" href="/register?registration_type=employee">EMPLOYEE</a>
								<a class="dropdown-item" id="list_dropdown" href="/register?registration_type=manager">MANAGER</a>
							</div>
						</div>
					</li>
				</ul>
			</nav>

			<!-- Hamburger -->
			<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_door door_left"></div>
		<div class="menu_door door_right"></div>
		<div class="menu_content d-flex flex-column align-items-center justify-content-center">
			<div class="menu_close">close</div>
			<div class="menu_nav_container">
				<nav class="menu_nav text-center">
					<ul>
						<li><a href="/">home</a></li>
						<li><a href="about.html">about</a></li>
						<li class="active"><a href="login">login</a></li>
						<li>
							<div class="dropdown dropdown-menu-right">
								<a href="register" dropdown-toggle href="#" id="dropdownMenuLink" data-toggle="dropdown">register</a>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<a class="dropdown-item" id="list_dropdown" href="/register?registration_type=employee">EMPLOYEE</a>
									<a class="dropdown-item" id="list_dropdown" href="/register?registration_type=manager">MANAGER</a>
								</div>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<!-- Home -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h4><center>{{ __('LOGIN') }}</h4></center></div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    @include('includes.footer') 

<script src="{{secure_asset('js2/jquery-3.3.1.min.js')}}"></script>
<script src="{{secure_asset('styles/bootstrap-4.1.2/popper.js')}}"></script>
<script src="{{secure_asset('styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{secure_asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{secure_asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{secure_asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{secure_asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{secure_asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{secure_asset('plugins/OwlCarousel2-2.3.4/owl.carousel.js')}}"></script>
<script src="{{secure_asset('plugins/easing/easing.js')}}"></script>
<script src="{{secure_asset('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{secure_asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{secure_asset('js2/custom.js')}}"></script>
</body>
</html>