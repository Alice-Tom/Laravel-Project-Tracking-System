<!DOCTYPE html>
<html lang="en">
<head>
<title>PTS -Manager Registration</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sportify template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.3.4/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.3.4/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.3.4/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
 {{-- icon --}}
 <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png')}}?v={{ date('YmdHis') }}">
 <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png')}}?v={{ date('YmdHis') }}">
 <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png')}}?v={{ date('YmdHis') }}">
 <link rel="manifest" href="{{ asset('site.webmanifest')}}?v={{ date('YmdHis') }}">


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
					<li><a href="login">login</a></li>
					<li class="active">
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
					<li><a href="login">login</a></li>
					<li class="active">
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
						<li><a href="login">login</a></li>
						<li class="active">
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
                    <div class="card-header"><h4><center>{{ __('MANAGER REGISTRATION') }}</h4></center></div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('register.store', ['registration_type' => 'manager']) }}">
                            @csrf
    
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{session('success')}}
                                </div>
                            @endif
    
                            <div class="form-group row">
                                <label for="full_name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required autocomplete="full_name" autofocus>
    
                                    @error('full_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
    
                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">
    
                                    @error('phone_number')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="designation" class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>
    
                                <div class="col-md-6">
                                    <input id="designation" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{ old('designation') }}" required autocomplete="designation">
    
                                    @error('designation')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    @include('includes.footer') 

<script src="{{asset('js2/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap-4.1.2/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.3.4/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('js2/custom.js')}}"></script>
</body>
</html>