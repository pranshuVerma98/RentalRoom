<?php include_once("header.php"); 
	$con = mysqli_connect("localhost","root","","rental_rooms");
	$count=$_GET['id'];
	if (!$con){
    die('Could not connect:'. mysqli_error($con));
	}
	$sql="SELECT * FROM users JOIN rooms where rooms.rid ='".$count."' and rooms.status='0'";
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result)) 
	{
	$title=$row[10];
	$name=$row[2];$email=$row[3];$mobile=$row[4];$uimg=$row[7];
	$address=$row[11].','.$row[13];$location=$row[12];
	$bed=$row[14];$bath=$row[15];$area=$row[16];
	$des=$row[19];$fac=$row[20];$price=$row[17];
	$img1=$row[22];$img1=$row[23];$type=$row[18];$cond=$row[21];
	}
?>
	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_content d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="intro_title_container">
							<div class="intro_title"><?php echo $title; ?></div>
							<div class="intro_tags">
								<ul>
									<li><?php echo $location; ?></li>
									<li><?php echo $bed; ?> Bed Rooms</li>
									<li><?php echo $bath; ?> Bath Rooms</li>
								</ul>
							</div>
						</div>
						<div class="intro_price_container ml-lg-auto d-flex flex-column align-items-start justify-content-center">
							<div>For Sale</div>
							<div class="intro_price">RS.<?php echo $price; ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="intro_slider_container">

			<!-- Intro Slider -->
			<div class="owl-carousel owl-theme intro_slider">
				<!-- Slide -->
				<div class="owl-item"><img src="img.php?table=rooms &id=<?php echo $_GET['id'];?> &no=img1" alt="image 1" style="height:100"></div>
				<!-- Slide -->
				<div class="owl-item"><img src="img.php?table=rooms &id=<?php echo $_GET['id'];?> &no=img2" alt="image 2" style="height:100"></div>
			</div>

			<!-- Intro Slider Nav -->
			<div class="intro_slider_nav_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="intro_slider_nav_content d-flex flex-row align-items-start justify-content-end">
								<div class="intro_slider_nav intro_slider_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
								<div class="intro_slider_nav intro_slider_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Property -->

	<div class="property">
		<div class="container">
			<div class="row">
				
				<!-- Sidebar -->

				<div class="col-lg-4">
					<div class="sidebar">
						<div class="sidebar_search">
							<div class="sidebar_search_title">Search your home</div>
							<div class="sidebar_search_form_container">
								<form action="rent.php" method ="GET" class="sidebar_search_form" id="sidebar_search_form">
									<select class="sidebar_search_select" name="loc" required="required">
										<option disabled selected value="">Location</option>
										<option>Vikas Nagar</option>
										<option>Jankipurm</option>
										<option>Gomti Nagar</option>
										<option>Indra Nagar</option>
									</select>
									<select class="sidebar_search_select" name="type" required="required">
										<option disabled selected value=""> Property Type</option>
										<option>Girls Hostel</option>
										<option>Boys Hostel</option>
										<option>Room</option>
										<option>Garage</option>
									</select>
									<select class="sidebar_search_select" name="price" required="required">
										<option disabled selected value=""> Price range </option>
										<option value="2000">Under 2000</option>
										<option value="3000">under 3000</option>
										<option value="4000">under 4000</option>
										<option value="50000">Above 4000</option>
									</select>
									<div class="row sidebar_search_row">
										<div class="col-lg-6">
											<input type="number" class="sidebar_search_input" placeholder="Bedrooms No" name="bed">
										</div>
										<div class="col-lg-6">
											<input type="number" class="sidebar_search_input" placeholder="Bathrooms No" name="bath">
										</div>
									</div>
									<input type="submit" class="sidebar_search_button search_form_button" name="val" value="Search">
								</form>
							</div>
						</div>

						<!-- Realtor -->
						<div class="sidebar_realtor">
							<h3>Seller Inforamtion:</h3>
							<div class="sidebar_realtor_body text-center">
								<div><img src="img.php?table=users &id=rid<?php echo $_GET['id'];?>&no=img1" alt="No image found" style="height:50%;width:50%;"></div>
								<div class="sidebar_realtor_title"><a href="#"><?php echo $name; ?></a></div>
								<div class="sidebar_realtor_subtitle"><?php echo $email; ?></div>
								<div class="sidebar_realtor_phone"><span>call us: </span><?php echo $mobile; ?></div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Property Content -->
				<div class="col-lg-7 offset-lg-1">
					<div class="property_content">
						<div class="property_title">For Buy Contact Direct to Owner.</div>
						<div class="property_icons">
							<div class="property_rooms d-flex flex-sm-row flex-column align-items-start justify-content-start">
								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_title">Full Address</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_num"><?php echo $address; ?></div>
										<div class="room_num"><?php echo $location; ?></div>
									</div>
								</div>
							</div>
							<div class="property_rooms d-flex flex-sm-row flex-column align-items-start justify-content-start">
								<div class="property_room">
									<div class="property_title">Type of Room</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_num"><?php echo $type; ?></div>
									</div>
								</div>
							</div>	
								<!-- Property Room Item -->
							<div class="property_title">Feathers Of Room</div>
							<div class="property_rooms d-flex flex-sm-row flex-column align-items-start justify-content-start">	
								<div class="property_room">
								<div class="property_room_title">Bed Room</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="images/room_1.png" alt=""></div>
										<div class="room_num"><?php echo $bed; ?></div>
									</div>
								</div>

								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_room_title">Bathrooms</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="images/room_2.png" alt=""></div>
										<div class="room_num"><?php echo $bath; ?></div>
									</div>
								</div>

								<!-- Property Room Item -->
								<div class="property_room">
									<div class="property_room_title">Area</div>
									<div class="property_room_content d-flex flex-row align-items-center justify-content-start">
										<div class="room_icon"><img src="images/room_3.png" alt=""></div>
										<div class="room_num"><?php echo $area; ?></div>
									</div>
								</div>

							</div>
						</div>

						<!-- Description -->
						<div class="property_title">Extra Facilities</div>
							<div class="property_text property_text_1">
								<p><?php echo $fac; ?>.</p>
							</div>
						<div class="property_description">
							<div class="property_title">Description</div>
							<div class="property_text property_text_2">
								<p><?php echo $des; ?></p>
							</div>
						</div>
						<div class="property_description">
							<div class="property_title">Condtions For Paying Guest</div>
							<div class="property_text property_text_2">
								<p><?php echo $cond; ?></p>
							</div>
						</div>

						<!-- Property On Map -->

						<div class="property_map">
							<div class="property_title">Property on map</div>
							<div class="property_map_container">

								<!-- Google Map -->
								<div id="google_map" class="google_map">
									<div class="map_container">
										<div id="map"></div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include_once("footer.php") ?>