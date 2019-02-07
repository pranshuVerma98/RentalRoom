<?php include_once("header.php") ?>
	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">

				<!-- About Content -->
				<div class="col-lg-6">
					<div class="about_content">
						<div class="section_title">A few words about us</div>
						<div class="section_subtitle">Find Your Room easily</div>
						<div class="about_text">
							<p>
							Our main Aim is to Start a service for people. So They can Find Their Rooms 
							easily on a single click. You can Find all Your room On Rents and then 
							Contact The owner directly even Without Paying anythink to anyone.
							Please mail your suggestion On my Mail Id.
							For any query call Us or mail Us at any time.
							</p>
						</div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-6">
					<div class="about_image"><img src="images/about_image.jpg" alt=""></div>
				</div>
			</div>
			<div class="row milestones_row">
<?php 
	$con = mysqli_connect("localhost","root","","rental_rooms");
		if (!$con){
			die('Could not connect:'. mysqli_error($con));
					}
		$sql="SELECT SUM(`Bedroom`) FROM `rooms` where `status`=0";
		$j = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($j)) 
			{
				$value=$row[0]; break;
			}
	
?>
				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/milestones_1.png" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="<?php echo $value; ?>">0</div>
							<div class="milestone_text">Available Rent Rooms</div>
						</div>
					</div>
				</div>
<?php 
	$con = mysqli_connect("localhost","root","","rental_rooms");
		if (!$con){
			die('Could not connect:'. mysqli_error($con));
					}
		$sql="SELECT COUNT(DISTINCT `email`) FROM `users`";
		$j = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($j)) 
			{
				$val=$row[0]; break;
			}
	
?>
				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/milestones_2.png" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="<?php echo $val;?>">0</div>
							<div class="milestone_text">LandLords Contact Us</div>
						</div>
					</div>
				</div>
<?php 
	$con = mysqli_connect("localhost","root","","rental_rooms");
		if (!$con){
			die('Could not connect:'. mysqli_error($con));
					}
		$sql="SELECT SUM(`Bedroom`) FROM `rooms` where `status`=0 and `type` LIKE '%Hostal'";
		$j = mysqli_query($con,$sql);
		while($row = mysqli_fetch_array($j)) 
			{
				$values=$row[0]; break;
			}
	
?>
				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone d-flex flex-row align-items-center justify-content-start">
						<div class="milestone_icon d-flex flex-column align-items-center justify-content-center"><img src="images/milestones_3.png" alt=""></div>
						<div class="milestone_content">
							<div class="milestone_counter" data-end-value="<?php echo $values;?>">0</div>
							<div class="milestone_text">Available Hostals</div>
						</div>
						
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Realtors -->

	<div class="realtors">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Who we are?</div>
					<div class="section_subtitle">Find Your Room easily</div>
				</div>
			</div>
			<div class="row realtors_row">
				
				<!-- Realtor -->
				<div class="col-lg-3 col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="images/realtor_1.jpg" alt=""></div>
							<div class="realtor_body">
								<div class="realtor_title">Pranshu Verma</div>
								<div class="realtor_title">Senior Admin</div>
								<div class="realtor_subtitle">pranshu.verma98@gmail.com</div>
							</div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>

				<!-- Realtor -->
				<div class="col-lg-3 col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="images/realtor_2.jpg" alt=""></div>
							<div class="realtor_body">
								<div class="realtor_title">Srishti Tiwari</div>
								<div class="realtor_subtitle">Senior Admin</div>
							</div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>

				<!-- Realtor -->
				<div class="col-lg-3 col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="images/realtor_3.jpg" alt=""></div>
							<div class="realtor_body">
								<div class="realtor_title">Tushar Verma</div>
								<div class="realtor_subtitle">Junior Admin</div>
							</div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>

				<!-- Realtor -->
				<div class="col-lg-3 col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="images/realtor_4.jpg" alt=""></div>
							<div class="realtor_body">
								<div class="realtor_title">Jessica Walsh</div>
								<div class="realtor_subtitle">Junior Admin</div>
							</div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
<?php include_once("footer.php") ?>