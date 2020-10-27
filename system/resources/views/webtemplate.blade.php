<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>web template</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Skin Beauty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="{{ url('public')}}/_src/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="{{ url('public')}}/_src/css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" href="{{ url('public')}}/_src/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="{{ url('public')}}/_src/css/font-awesome.min.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
					<!-- logo -->
					<div id="logo">
						<h1><a class="" href="index.html"> Beauty Up</a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="{{ url('webtemplate') }}" class="active">Home</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="{{ url('aboutus') }}" >About Us</a></li>
								<li><a href="{{ url('gallery') }}" >Gallery</a></li>
								<li><a href="{{ url('contact') }}" >Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="banner_w3lspvt">
			<div class="csslider infinity" id="slider1">
				<input type="radio" name="slides" checked="checked" id="slides_1" />
				<input type="radio" name="slides" id="slides_2" />
				<input type="radio" name="slides" id="slides_3" />
				<ul class="banner_slide_bg">
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<p>Welcome to </p>
								<h3 class="w3ls_pvt-title">Beauty Up</h3>
								<a href="{{ url('loginp3')}}" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Login</a>
							</div>
						</div>
					</li>
					<li>
						<div class="container">
							<div class="w3ls_banner_txt text-center mx-auto">
								<p>We Provide a Wide Range Of Beauty Products</p>
								<h3 class="w3ls_pvt-title">Beauty & Skin</h3>
								<a href="about.html" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Read More</a>
							</div>
						</div>
					</li>
					<li>
						<div class="container">
							<div class="w3ls_banner_txt text-right ml-auto">
								<p>We have the best and most popular products</p>
								<h3 class="w3ls_pvt-title">K-Beauty</h3>
								<a href="about.html" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Read More</a>
							</div>
						</div>
					</li>
				</ul>
				<div class="arrows">
					<label for="slides_1"></label>
					<label for="slides_2"></label>
					<label for="slides_3"></label>
				</div>
				<div class="navigation">
					<div>
						<label for="slides_1"></label>
						<label for="slides_2"></label>
						<label for="slides_3"></label>
					</div>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- about -->
	<div class="about py-5" id="about">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-center text-bl font-weight-bold mb-1">Welcome to our Website</h3>
			<p class="title-sub text-center mb-sm-5 mb-4">New Product</p>
			<div class="row about-bottom-w3l text-center pt-xl-5">
				<div class="col-md-6">
					<div class="about-grid-main">
						<img src="{{ url('public')}}/img/img10.jpg" alt="" class="img-fluid">
						<h4 class="my-3">Serum Scarlett</h4>
						<a href="{{ url('loginp3') }}" class="button-w3ls mt-4"><span class="fa fa-hand-o-right mr-2" aria-hidden="true"></span>
							Read More
						</a>
					</div>
				</div>
				<div class="col-md-6 about-grid mt-md-0 mt-4">
					<div class="about-grid-main">
						<img src="{{ url('public')}}/img/img6.webp" alt="" class="img-fluid">
						<h4 class="my-3">Lip Mousse Matte Velvet Wardah</h4>
						<a href="{{ url('loginp3') }}"  class="button-w3ls mt-4"><span class="fa fa-hand-o-right mr-2" aria-hidden="true"></span>
							Read More
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->


	<!-- best in -->
	<div class="models-agile pb-5 py-xl-0 py-md-5">
		<div class="container pb-xl-5 pb-lg-3">
			<div class="row">
				<div class="offset-xl-2"></div>
				<div class="col-xl-5 col-md-6 left-models mt-lg-5 mt-md-3 pt-lg-4">
					<h3 class="title text-bl font-weight-bold mb-1">Category</h3>
					<p class="title-sub mb-sm-4 mb-3">Semua produk dijamin lengkap dan terbaru</p>
					<a href="{{ url('loginp3') }}"  style="max-width: 150px;" class="btn button-style button-style-3 mt-sm-5 mt-4">Learn More</a>
				</div>
				<div class="col-xl-5 col-md-6 right-models text-center mt-md-0 mt-5">
					<div class="row">
						<div class="col-6">
							<div class="card">
								<div class="card-body py-lg-5 py-4">
									<span class="fa fa-smile-o" aria-hidden="true"></span>
									<h5 class="card-title mt-3">Skincare</h5>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card">
								<div class="card-body py-lg-5 py-4">
									<span class="fa fa-female" aria-hidden="true"></span>
									<h5 class="card-title mt-3">Bodycare</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-6">
							<div class="card">
								<div class="card-body py-lg-5 py-4">
									<span class="fa fa-heart" aria-hidden="true"></span>
									<h5 class="card-title mt-3">Base Make Up</h5>
								</div>
							</div>
						</div>
						<div class="col-6">
							<div class="card">
								<div class="card-body py-lg-5 py-4">
									<span class="fa fa-eye" aria-hidden="true"></span>
									<h5 class="card-title mt-3">Eye Product</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //best in -->
	<!-- support -->
	<div class="serives-agile py-5" id="support">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-center text-bl font-weight-bold mb-1">Help & Support</h3>
			<p class="title-sub text-center mb-sm-5 mb-4">24 Hours Online</p>
			<div class="row support-bottom text-center">
				<div class="col-md-4 support-grid">
					<span class="fa fa-headphones"></span>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Online Support</h5>
					<a href="{{ url('contact') }}"  class="btn button-style-2 mt-sm-5 mt-4">
						Call Us
					</a>
				</div>
				<div class="col-md-4 support-grid my-md-0 my-5">
					<span class="fa fa-comments"></span>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Live Chat 24/7</h5>
					<a href="{{ url('contact') }}" class="btn button-style-2 mt-sm-5 mt-4">
						Let's Chart
					</a>
				</div>
				<div class="col-md-4 support-grid">
					<span class="fa fa-question"></span>
					<h5 class="text-dark text-uppercase mt-4 mb-3">Any Questions</h5>
					<a href="{{ url('contact') }}" class="btn button-style-2 mt-sm-5 mt-4">
						Learn More
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- support -->

	<!-- footer -->
	<footer class="footer-w3ls py-5">
		<div class="container py-sm-4">
			<div class="row">
				<div class="col-lg-3 col-sm-6 agileinfo_footer_grid">
					<!-- logo -->
					<div class="logo-2 mb-sm-4 mb-3">
					</div>
					</div>
				<div class="col-lg-3 col-sm-6 agileinfo_footer_grid pl-lg-0 mt-lg-0 mt-5">
					<h4 class="mb-sm-5 mb-4">Instagram Posts</h4>
					<div class="d-flex">
						<div class="col-sm-4 col-3 agileinfo_footer_grid1">
							<a href="#">
								<img src="{{ url('public')}}/_src/images/f1.jpg" alt=" " class="img-fluid">
							</a>
						</div>
						<div class="col-sm-4 col-3 agileinfo_footer_grid1">
							<a href="#">
								<img src="{{ url('public')}}/_src/images/f2.jpg" alt=" " class="img-fluid">
							</a>
						</div>
						<div class="col-sm-4 col-3 agileinfo_footer_grid1">
							<a href="#">
								<img src="{{ url('public')}}/_src/images/f3.jpg" alt=" " class="img-fluid">
							</a>
						</div>
					</div>
					<div class="d-flex mt-2">
						<div class="col-sm-4 col-3 agileinfo_footer_grid1">
							<a href="#">
								<img src="{{ url('public')}}/_src/images/f4.jpg" alt=" " class="img-fluid">
							</a>
						</div>
						<div class="col-sm-4 col-3 agileinfo_footer_grid1">
							<a href="#">
								<img src="{{ url('public')}}/_src/images/f5.jpg" alt=" " class="img-fluid">
							</a>
						</div>
						<div class="col-sm-4 col-3 agileinfo_footer_grid1">
							<a href="#">
								<img src="{{ url('public')}}/_src/images/f6.jpg" alt=" " class="img-fluid">
							</a>
						</div>
					</div>
                </div>
                <div class="logo-2 mb-sm-4 mb-3">
				</div>
				<div class="col-lg-3 col-sm-6 agileinfo_footer_grid mt-lg-0 mt-5">
					<h4 class="mb-sm-5 mb-4">Address</h4>
					<ul class="list-unstyled">
						<li>
							<span class="fa fa-map-marker mr-2"></span> Rangga Sentap, Ketapang</li>
						<li>
							<span class="fa fa-envelope mr-2"></span>
							<a href="mailto:info@example.com">info@example.com</a>
						</li>
						<li>
							<span class="fa fa-phone mr-2"></span> (0123) 0111 111 222</li>
						<li>
							<span class="fa fa-clock-o mr-2"></span>Everyday 9:00-17:00</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->

	<!-- footer last -->
	<div class="newsletter-main text-center py-md-5 py-4">
		<div class="container">
			<a href="#home" class="move-top text-center"></a>
			<!-- newsletter -->
			<div class="agileinfo_footer_grid mt-3">
				<h4 class="mb-4">Subscribe Here</h4>
				<form action="#" method="post" class="newsletter">
					<input class="email" type="email" name="email" placeholder="Your email..." required>
					<button type="submit" class="btn">Subscribe</button>
				</form>
				<div class="clearfix"> </div>
			</div>
			<!-- //newsletter -->
			<!-- copyright -->
			<div class="w3agile_footer_copy mt-sm-5 mt-4">
				<p>© 2020 Beauty Up. All rights reserved |
					<a href="#">www.beautyup.com</a>
				</p>
			</div>
			<!-- //copyright -->
		</div>
	</div>
	<!-- //footer last -->

</body>

</html>