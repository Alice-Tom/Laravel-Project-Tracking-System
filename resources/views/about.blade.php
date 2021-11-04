<!DOCTYPE html>
<html lang="en">
<head>
<title>P T S</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sportify template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{secure_asset('styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{ secure_asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{secure_asset('plugins/OwlCarousel2-2.3.4/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{secure_asset('plugins/OwlCarousel2-2.3.4/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{secure_asset('plugins/OwlCarousel2-2.3.4/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{secure_asset('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{secure_asset('styles/responsive.css')}}">
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
					<li class="active"><a href="about">about</a></li>
					<li><a href="login">login</a></li>
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
					<li class="active"><a href="about">about</a></li>
					<li><a href="login">login</a></li>
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
						<li class="active"><a href="about">about</a></li>
						<li><a href="login">login</a></li>
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

	<div class="home">
		
		<!-- Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/photo_3.jpeg)"></div>
					<div class="home_slider_overlay"></div>
					<div class="slide_wrap d-flex flex-column align-items-start justify-content-center">
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_content active">
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<div class="home_subtitle">A PLACE WHERE YOU CAN EASILY <br> MANAGE ALL YOUR PROJECTS</div>
											<div class="home_title">
												{{-- <h1><span>A</span>GREAT</h1> --}}
												{{-- <h1>MANAGER</h1> --}}
											</div>
											{{-- <div class="button home_button"><a href="#">read more</a></div> --}}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/photo_2.jpeg)"></div>
					<div class="home_slider_overlay"></div>
					<div class="slide_wrap d-flex flex-column align-items-start justify-content-center">
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_content">
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<div class="home_subtitle">VIEW AND COMMENT ON PROJECTS OF <br> ALL YOUR EMPLOYEES INORDER</div>
											<div class="home_title">
												{{-- <h1><span>CAN'T LOOSE</span>A</h1> --}}
												{{-- <h1>THING</h1> --}}
											</div>
											{{-- <div class="button home_button"><a href="#">read more</a></div> --}}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/photo_1.jpeg)"></div>
					<div class="home_slider_overlay"></div>
					<div class="slide_wrap d-flex flex-column align-items-start justify-content-center">
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_content">
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<br>
											<div class="home_subtitle">STORE AND TRACK ALL YOUR <br>PROJECTS IN ONE PLACE</div>
											<div class="home_title">
												{{-- <h1><span>TRACK</span>THEM</h1> --}}
												{{-- <h1>ALL</h1> --}}
											</div>
											{{-- <div class="button home_button"><a href="#">read more</a></div> --}}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="intro_boxes_wrap">
			<div class="d-flex flex-row align-items-start justify-content-start flex-wrap">
				
				<!-- Intro Box -->
				<div class="intro_box d-flex flex-column align-items-center justify-content-center text-center">
					<div class="intro_box_icon"><img src="images/icon_1.svg" alt=""></div>
					<div class="intro_box_title"><h3>MANAGEGE</h3></div>
					<div class="intro_box_text">
						<p>Manage all your projects in one place</p>
					</div>
				</div>

				<!-- Intro Box -->
				<div class="intro_box d-flex flex-column align-items-center justify-content-center text-center">
					<div class="intro_box_icon"><img src="images/icon_2.svg" alt=""></div>
					<div class="intro_box_title"><h3>STORE</h3></div>
					<div class="intro_box_text">
						<p>Best place to store your projects</p>
					</div>
				</div>

				<!-- Intro Box -->
				<div class="intro_box d-flex flex-column align-items-center justify-content-center text-center">
					<div class="intro_box_icon"><img src="images/icon_3.svg" alt=""></div>
					<div class="intro_box_title"><h3>TRACK</h3></div>
					<div class="intro_box_text">
						<p>Track everyday activities done within your projects</p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_bar d-flex flex-row align-items-center justify-content-center">
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="index">Project Tracking System </a><br><center> Site made by ATM</center></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
</div>

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