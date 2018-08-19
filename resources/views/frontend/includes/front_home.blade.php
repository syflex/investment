<!-- Header --> 
<header class="site-header is-transparent header-s1 is-sticky">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<ul class="social">
								<li><a href="#"><em class="fa fa-facebook"></em></a></li>
								<li><a href="#"><em class="fa fa-twitter"></em></a></li>
								<li><a href="#"><em class="fa fa-linkedin"></em></a></li>
								<li><a href="#"><em class="fa fa-google-plus"></em></a></li>
							</ul>
						</div>
						<div class="col-sm-6 al-right">
							<ul class="top-nav">
								<li><a href="#">Help</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="{{url('login')}}">Login</a></li>
								<li><a href="{{url('register')}}">Register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Navbar -->
			<div class="navbar navbar-primary">
				<div class="container relative">
					<!-- Logo -->
					<a class="navbar-brand" href="{{('./')}}">
						<img class="logo logo-dark" alt="logo" src="{{asset('front/images/logo-blue.png')}}">
						<img class="logo logo-light" alt="logo" src="{{asset('front/images/logo_blue_white.png')}}">
					</a>
					<!-- #end Logo -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
							<span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="quote-btn"><a class="btn" href="{{url('register')}}"><span>get started</span></a></div>
					</div>
					<!-- MainNav -->
					<nav class="navbar-collapse collapse" id="mainnav">
						<ul class="nav navbar-nav">
							<li><a href="{{url('./')}}" class="dropdown-toggle">Home </a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Teams</a></li>
							<li><a href="#">Testimonial</a></li>
							<li><a href="#">How it Works</a></li>			
							<li><a href="#">Contact</a></li>
							<li class="quote-btn hidden-xs hidden-sm"><a class="btn" href="{{url('register')}}">get started</a></li>
						</ul>
					</nav>
					<!-- #end MainNav -->
				</div>
			</div>
			<!-- End Navbar -->
			<!-- Banner/Slider -->
			<div id="header" class="banner light row-vm">
				<div class="imagebg">
					<img src="{{asset('front/images/header-bg-c.jpg')}}" alt="bg">
				</div>
				<div class="container">
					<div class="banner-content">
						<div class="row text-center">
							<div class="col-md-8 col-md-offset-2">
								<h1 class="">Royal Real Investment<br class="hidden-xs" /> As Easy As Your Name</h1>
							</div>
							<div class="gaps size-1x"></div>
						</div>
						<div class="row text-center">
							<div class="col-md-6 col-md-offset-3">
								<p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
								<ul class="btns">
									<li><a href="{{url('login')}}" class="btn">Login</a></li>
									<li><a href="{{url('register')}}" class="btn btn-outline">Signup</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Banner/Slider -->
		</header>
    	<!-- End Header -->