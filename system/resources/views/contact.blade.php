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

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>
			 <div class="main-top" id="home">
		<!-- header -->
		<header>
			<div class="container-fluid">
				<div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
					<!-- logo -->
					<div id="logo">
						<h1><a class="" href={{ url('webtemplate')}}> Beauty Up </a></h1>
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
								<li><a href="{{ url('gallery')}}">Gallery</a></li>
								<li><a href="{{ url('contact')}}" class="active">Contact Us</a></li>
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
    
	
	<!-- contact -->
	<section class="contact py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-center text-bl font-weight-bold mb-1">Contact Us</h3>
			<p class="title-sub text-center mb-sm-5 mb-4">Caption placed here</p>
			<div class="contact-form mx-auto text-left">
				<form method="post" action="#">
					<div class="row">
						<div class="col-lg-4 con-gd">
							<div class="form-group">
								<label>Name *</label>
								<input type="text" class="form-control" placeholder="Enter Name" name="name" required>
							</div>
						</div>
						<div class="col-lg-4 con-gd">
							<div class="form-group">
								<label>Email *</label>
								<input type="email" class="form-control" placeholder="Enter Email" name="email" required>
							</div>
						</div>
						<div class="col-lg-4 con-gd">
							<div class="form-group">
								<label>Phone No. *</label>
								<input type="text" class="form-control" placeholder="Enter Phone no." name="phone" required>
							</div>
						</div>
					</div>
					<div class="form-group mt-4 mb-5">
						<label>How can we help?</label>
						<textarea name="message" class="form-control" placeholder="Enter Your Message Here" required></textarea>
					</div>
					<div class="contact-page">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- //contact -->

	<!-- map -->
	<div class="map p-2">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
		 class="map" style="border:0" allowfullscreen=""></iframe>
	</div>
	<!-- //map -->

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
			</div>{{ url('public')}}/_src/
			<!-- //copyright -->
		</div>
	</div>
	<!-- //footer last -->

</body>

</html>