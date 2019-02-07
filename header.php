<!DOCTYPE html>
<html lang="en">
<head>
<title>Rental Rooms</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Rent Rooms ,Hostal ,Boy hostal ,Girls Hostal ,Shop ,Garage ,looking for paying guest in Lucknow">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/properties.css">
<link rel="stylesheet" type="text/css" href="styles/properties_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/property.css">
<link rel="stylesheet" type="text/css" href="styles/property_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<a href="#"><img src="images/logo.png" alt=""></a>
						</div>
						<nav class="main_nav">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About us</a></li>
								<li><a href="rentroom.php">LandLord</a></li>
								<li><a href="rent.php">Rent Rooms</a></li>
								<li><a href="contact.php">Contact</a></li><br>
							</ul>
						</nav>
						<div class="phone_num ml-auto">
							<div class="phone_num_inner">
								<img src="images/phone.png" alt=""><span>9506679728</span>
							</div>
						</div>
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo">
				<a href="#">
					<div class="logo_container d-flex flex-row align-items-start justify-content-start">
						<div class="logo_image"><div><img src="images/logo.png" alt="logo"></div></div>
					</div>
				</a>
			</div>
			<ul>
				<li class="menu_item"><a href="index.php">Home</a></li>
				<li class="menu_item"><a href="about.php">About us</a></li>
				<li class="menu_item"><a href="rent.php">Rent Room</a></li>
				<li class="menu_item"><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="menu_phone"><span>call us: </span>9506679728</div>
	</div>
	
	<!-- Home -->
	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										<div class="home_subtitle">Searching For a Room On Rent??</div>
										<div class="home_title">Rental Rooms</div>
										
										<div class="home_price">Find Your Room Easily</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										<div class="home_subtitle">Searching For a Room On Rent??</div>
										<div class="home_title">Rental Rooms</div>
										
										<div class="home_price">Find Your Room Easily</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="slide_content">
										<div class="home_subtitle">Searching For a Room On Rent??</div>
										<div class="home_title">Rental Rooms</div>
										<div class="home_price">Find Your Room Easily</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	
	<!-- Home Search -->
	<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_content">
							<form action="rent.php" method="GET" class="search_form d-flex flex-row align-items-start justfy-content-start">
								<div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
									<div>
										<select class="search_form_select" name="type" required="required">
											<option disabled selected value="">Type Of Room</option>
											<option>Simple Room</option>
											<option>P.G.</option>
											<option>Girls Hostal</option>
											<option>Boys Hostal</option>
											<option>Full Floar</option>
										</select>
									</div>
									<div>
										<select class="search_form_select" name="loc" required="required">
											<option disabled selected value="">Prefer Location</option>
											<option>Jankipurm</option>
											<option>Gomti Nagar</option>
											<option>Vikas Nagar</option>
											<option>Indra Nagar</option>
										</select>
									</div>
									<div>
										<select class="search_form_select" name="bed" required="required">
											<option disabled selected value="0">Bedrooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
									</div>
									<div>
										<select class="search_form_select" name="bath" required="required">
											<option disabled selected value="0">Bathrooms</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
									</div>
									<div>
										<select class="search_form_select" name="price" required="required">
											<option disabled selected value="">Price Range</option>
											<option value="2000">Under 2000</option>
											<option value="3000">Under 3000</option>
											<option value="4000">Under 4000</option>
											<option value="50000">Above 4000</option>
										</select>
									</div>
								</div>
								<input type="submit" name="val" class="search_form_button ml-auto" value="Search">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

