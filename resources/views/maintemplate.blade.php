<!DOCTYPE html>
<html lang="en">

<head>
	<title>The 7 Stars Hotel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>

	<link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">

	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<link rel="stylesheet" href="{{ asset('css/aos.css') }}">

	<link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">

	<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">

	<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	@yield('body-style')

	<style>

		/* .navbar-wrapper {
			display: flex;
			justify-content: center;
			align-items: center;
		} */

		.ftco-navbar-light {
			display: flex;
			justify-content: space-around;
			position: absolute;
		}

		.navbar-style {
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		.navbar-collapse {
			flex-grow: 0;
		}

		.navbar-brand {
			margin-right: 0;
		}

		@media screen and (max-width: 992px) {
			.login-signup-btn-container {
				display: none;
			}
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<a class="navbar-brand" href="{{ url('/') }}">The <span>5 Stars</span> Hotel</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
			aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>

		<div class="collapse navbar-collapse" id="ftco-nav" style="margin-right: 3rem;">
			@yield('nav')
		</div>

		<div class="login-signup-btn-container">
			<a href="{{ url('/login') }}">
				<button class="btn btn-light" style="border-radius: 10px;">Login</button>
			</a>
			<a href="{{ url('signup') }}">
				<button class="btn btn-success" style="border-radius: 10px;">Sign Up</button>
			</a>
		</div>
	</nav>
	<!-- END nav -->
	<div>
		@yield('home-content')
		@yield('rooms-content')
		@yield('restaurant-content')
		@yield('about-content')
		@yield('contact-content')
		@yield('blog-content')
		@yield('room-detail')
		@yield('register')
		@yield('login')
		@yield('booking')
	</div>

	<footer class="ftco-footer ftco-section img" style="background-image: url(images/bg_4.jpg);">
		<div class="overlay" style="background-color: #2d2d2e;"></div>
		<div class="" style="margin-left: 2rem; margin-right: 2rem;">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Find Us</h2>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.0981783402535!2d110.4135541749086!3d-7.779414177184221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59f1fb2f2b45%3A0x20986e2fe9c79cdd!2sUniversitas%20Atma%20Jaya%20Yogyakarta%20-%20Kampus%203%20Gedung%20Bonaventura%20Babarsari!5e0!3m2!1sid!2sid!4v1698141567898!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-5">
						<h2 class="ftco-heading-2">Explore</h2>
						<p>
							<a href="">About Us</a>
						</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li>
									<span class="icon icon-map-marker"></span>
									<span class="text">Jl. kesitu aja, Kec. Daerah, Kab. Wilayah, Yogyakarta</span>
								</li>
								<li>
									<a href="#">
										<span class="icon icon-phone"></span>
										<span class="text">+62 2893 2838 2738
											210</span>
									</a>
								</li>
								<li>
									<a href="#">
										<span class="icon icon-envelope"></span>
										<span class="text">ask@the5stars.com</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | Kelompok 15
					</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" /></svg>
	</div>

	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/aos.js') }}"></script>
	<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('js/scrollax.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="{{ asset('js/google-map.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>