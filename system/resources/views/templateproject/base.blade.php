<!DOCTYPE html>
<html lang="zxx">

<head>
	<title> Halaman Depan  </title>
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
   <link href="{{ url('public')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
    <div class="main-top" id="home">
		<!-- header -->
	@include('templateproject.section.header')
		<!-- //header -->
		<!-- banner -->
		<div class="banner_w3lspvt-2">
		</div>
		<!-- //banner -->
	</div>

	<!-- about -->
	<div class="container">
		
		   @yield('content')
	</div>
	<!-- //about -->


	<!-- best in -->
	<div class="models-agile pb-5 py-xl-0 py-md-5" style="margin-top: 100px">
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
	@include('templateproject.section.footer')
	<!-- //footer last -->
 <script src="{{ url('public')}}/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="{{ url('public')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <!-- Page level custom scripts -->
  <script src="{{ url('public')}}/js/demo/chart-area-demo.js"></script>
  <script src="{{ url('public')}}/js/demo/chart-pie-demo.js"></script>
  @stack('script')
  <script>
    $(".table-datatable").DataTable();
   

  </script>
</body>

</html>
	