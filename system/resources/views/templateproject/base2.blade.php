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
		<div class="row">
			<div class="col-md-12">
  @yield('content')
			</div>
		</div>
		 
	</div>
	<!-- //about -->

</body>

</html>
	