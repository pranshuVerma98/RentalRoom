<?php
	if(isset($_POST['val']))
	{
		$con = mysqli_connect("localhost","root","","rental_rooms");
		if (!$con){
			die('Could not connect:'. mysqli_error($con));
					}
		$sql="INSERT INTO `subscribed` VALUES ('".$_POST['email']."') ";
		$i = mysqli_query($con,$sql);
		if($i)
		{
			include_once("header.php");
			?><div class="cities">
			<div class="cities_container d-flex flex-row flex-wrap align-items-start justify-content-between">
			<div class="city">
			<div class="city_overlay">
			<div class="city_title">Your Email is Uploaded Successfully.</div>
			<div class="city_subtitle"><p>We will contact you as soon as possible.<br>We will send you all recent activities.
			<br> Thanks.</p></div></div>
			</div>
			</div>
		</div>
		</div>
		<?php include_once("footer.php");
		}
	}
	else{	
	?>

	<div class="newsletter">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_content d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="newsletter_title_container">
							<div class="newsletter_title">Find Latest News</div>
							<div class="newsletter_subtitle">Find Your Room Easily</div>
						</div>
						<div class="newsletter_form_container">
							<form action="<?php echo $_SERVER['PHP_SELF'];?>" method= "POST" class="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="Your e-mail address" required="required" name="email">
								<input type="submit" name="val" class="newsletter_button" value="subscribe now">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<footer class="footer">
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-row align-items-center justify-content-start">
							
							<div class="footer_nav">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">About us</a></li>
									<li><a href="rentroom.php">LandLord</a></li>
									<li><a href="rent.php">Rent Rooms</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li><a href="change.php">Update Details</a></li>
								</ul>
							</div>
							<div class="footer_phone ml-auto"><span>call us At: </span>9506679728</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="js/about.js"></script>
<script src="js/properties.js"></script>
<script src="js/contact.js"></script>
<script src="js/property.js"></script>
</body>
</html>
	<?php }?>