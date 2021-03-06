
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Beauty Up</title>
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
	<link rel="stylesheet" href="{{ url('public')}}/_src/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="{{ url('public')}}/_src/css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>	<!-- main banner -->
	  <div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
					<!-- logo -->
					<div id="logo">
						<h1><a class="" href="index.html"> Beauty Up </a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
								<li><a href="{{ url('user/client')}}">Home</a></li>
								<li class="mx-lg-4 mx-md-3 my-md-0 my-2"><a href="{{ url('aboutus')}}" >About Us</a></li>
								<li><a href="{{ url('gallery')}}" class="active">Gallery</a></li>
								<li><a href="{{ url('contact')}}">Contact Us</a></li>
								<li><a href="{{ url('loginp3')}}"><i class="fa fa-user">Login</i></a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
		<!-- //header -->

		<!-- banner -->
		<div class="banner_w3lspvt-2">

		</div>
		<!-- //banner -->
	</div>
	<!-- page details -->
	<div class="breadcrumb-agile">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Gallery</li>
		</ol>
	</div>
	<!-- //page details -->

	<!-- gallery -->
	<div class="gallery py-5" id="gallery">
		<div class="container py-lg-5">
			<h3 class="title text-center text-bl font-weight-bold mb-1">Our Gallery</h3>
			<p class="title-sub text-center mb-sm-5 mb-4">Caption placed here</p>
			<div class="news-grids pb-lg-5 text-center">
				<div class="row">
					<div class="col-md-4 gal-img">
						<a href="#gal1"><img src="{{ url('public')}}/_src/images/g1.jpg" alt="news image" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img my-md-0 my-4">
						<a href="#gal2"><img src="{{ url('public')}}/_src/images/g2.jpg" alt="news image" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img">
						<a href="#gal3"><img src="{{ url('public')}}/_src/images/g3.jpg" alt="news image" class="img-fluid"></a>
					</div>
				</div>
				<div class="row my-4">
					<div class="col-md-4 gal-img">
						<a href="#gal4"><img src="{{ url('public')}}/_src/images/g4.jpg" alt="news image" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img my-md-0 my-4">
						<a href="#gal5"><img src="{{ url('public')}}/_src/images/g5.jpg" alt="news image" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img">
						<a href="#gal6"><img src="{{ url('public')}}/_src/images/g6.jpg" alt="news image" class="img-fluid"></a>
					</div>
				</div>
				<div class="row my-md-0 my-4">
					<div class="col-md-4 gal-img">
						<a href="#gal7"><img src="{{ url('public')}}/_src/images/g7.jpg" alt="news image" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img my-md-0 my-4">
						<a href="#gal8"><img src="{{ url('public')}}/_src/images/g8.jpg" alt="news image" class="img-fluid"></a>
					</div>
					<div class="col-md-4 gal-img">
						<a href="#gal9"><img src="images/g9.jpg" alt="news image" class="img-fluid"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- popup-->
	<div id="gal1" class="popup-effect animate">
		<div class="popup">
			<img src="images/g1.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal2" class="popup-effect animate">
		<div class="popup">
			<img src="images/g2.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal3" class="popup-effect animate">
		<div class="popup">
			<img src="images/g3.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup3 -->
	<!-- popup-->
	<div id="gal4" class="popup-effect animate">
		<div class="popup">
			<img src="images/g4.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal5" class="popup-effect animate">
		<div class="popup">
			<img src="images/g5.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal6" class="popup-effect animate">
		<div class="popup">
			<img src="images/g6.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal7" class="popup-effect animate">
		<div class="popup">
			<img src="images/g7.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal8" class="popup-effect animate">
		<div class="popup">
			<img src="images/g8.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- popup-->
	<div id="gal9" class="popup-effect animate">
		<div class="popup">
			<img src="images/g9.jpg" alt="Popup Image" class="img-fluid" />
			<p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
			<a class="close" href="#gallery">&times;</a>
		</div>
	</div>
	<!-- //popup -->
	<!-- //gallery -->

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