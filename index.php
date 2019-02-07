<?php include_once("header.php") ?>

	<!-- Cities -->

	<div class="cities">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Find properties in these locations</div>
					<div class="section_subtitle">Search Prefer Location</div>
				</div>
			</div>
		</div>
		
		<div class="cities_container d-flex flex-row flex-wrap align-items-start justify-content-between">

			<!-- City -->
			<div class="city">
			<?php 	
			$con = mysqli_connect("localhost","root","","rental_rooms");
			if (!$con){
			die('Could not connect:'. mysqli_error($con));
			}
			$sql="SELECT `Location`,COUNT(`Bedroom`) FROM `rooms` GROUP BY `Location`";
			$result = mysqli_query($con,$sql);
			while($row = mysqli_fetch_array($result)) 
			{ ?>
				<img src="images/city_1.jpg" alt="">
				<div class="city_overlay">
					<a href="rent.php?loc=<?php echo $row[0];?>&type='' &bed=''&bath=''&price='' &val=Search" class="d-flex flex-column align-items-center justify-content-center">
						<div class="city_title"><?php echo $row[0];?></div>
						<div class="city_subtitle"><?php echo $row[1];?> Rooms Are Available</div>
					</a>	
				</div>
			<?php }
			?>

			</div>
		</div>
	</div>

	<!-- Recent -->

	<div class="recent">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Recent Available Properties</div>
					<div class="section_subtitle">Find Your Dream Home Here</div>
				</div>
			</div>
			<!-- Slide -->
			<div class="row properties_row">
			<?php 	
			$con = mysqli_connect("localhost","root","","rental_rooms");
			if (!$con){
			die('Could not connect:'. mysqli_error($con));
			}
			$sql="SELECT * FROM rooms where status='0' ORDER BY rid DESC LIMIT 3";
			$result = mysqli_query($con,$sql);
			while($row = mysqli_fetch_array($result)) 
			{
				echo "<div class='col-xl-4 col-lg-6 property_col'>";
				echo "<div class='property'>";
				echo "<div class='property_image'>";
				echo "<img src='img.php?table=rooms &id=$row[0]&no=img1' alt='Images'>";
				echo "</div>";
					echo"<div class='property_body text-center'>";
						echo"<div class='property_location'>Location=> $row[3]</div>";
						echo"<div class='property_title'><a href='defrent.php?id=$row[0]'>Rent House</a></div>";
						echo"<div class='property_price'>Rs.$row[8]</div></div>";
						echo "<div class='property_footer d-flex flex-row align-items-center justify-content-start'>";
							echo"<div><div class='property_icon'><img src='images/icon_1.png' alt=''></div><span>$row[7]</span></div>";
							echo"<div><div class='property_icon'><img src='images/icon_2.png' alt=''></div><span>$row[5] Bedrooms</span></div>";
							echo"<div><div class='property_icon'><img src='images/icon_3.png' alt=''></div><span>$row[6] Bathrooms</span></div>";
						echo "</div></div></div>";
			}
			?>

					</div>
					<div class="button recent_button"><a href="rent.php">see more</a></div>
		</div>
	</div>
	
	
	<!-- Testimonials 
	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">What our clients say</div>
					<div class="section_subtitle">Find Your Dream Home Here</div>
				</div>
			</div>
			<div class="row testimonials_row">
				
-->				<!-- Testimonial Item 
				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Amazing home for me</div>
						<div class="testimonial_text">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</div>
						<div class="testimonial_author_image"><img src="images/testimonial_1.jpg" alt=""></div>
						<div class="testimonial_author"><a href="#">Diane Smith</a><span>, Client</span></div>
						<div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
					</div>
				</div>

-->				<!-- Testimonial Item 
				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Friendly Realtors</div>
						<div class="testimonial_text">Nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus blandit.</div>
						<div class="testimonial_author_image"><img src="images/testimonial_2.jpg" alt=""></div>
						<div class="testimonial_author"><a href="#">Michael Duncan</a><span>, Client</span></div>
						<div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
					</div>
				</div>

-->				<!-- Testimonial Item 
				<div class="col-lg-4 testimonial_col">
					<div class="testimonial">
						<div class="testimonial_title">Very good communication</div>
						<div class="testimonial_text">Retiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul.</div>
						<div class="testimonial_author_image"><img src="images/testimonial_3.jpg" alt=""></div>
						<div class="testimonial_author"><a href="#">Shawn Gaines</a><span>, Client</span></div>
						<div class="rating_r rating_r_5 testimonial_rating"><i></i><i></i><i></i><i></i><i></i></div>
					</div>
				</div>

			</div>
		</div>
	</div>
-->
	<!-- Footer -->
<?php include_once("footer.php") ?>
	