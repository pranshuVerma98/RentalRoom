<?php include_once("header.php"); 
?>
<!-- Properties -->

	<div class="properties">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title">Rent Rooms found</div>
					<div class="section_subtitle">Find Your room easily</div>
				</div>
			</div>
			<div class="row properties_row">
			<?php 	
			$con = mysqli_connect("localhost","root","","rental_rooms");
			if (!$con){
			die('Could not connect:'. mysqli_error($con));
			}
			if(isset($_GET['val']))
			{
				$sql="SELECT * FROM rooms where status='0' and `Location` LIKE '".$_GET['loc']."%' OR `type`= '".$_GET['type']."'OR `Bedroom`='".$_GET['bed']."' OR `Bathroom`='".$_GET['bath']."' OR 'price'<=".$_GET['price'];
			}
			else
			{	
			$sql="SELECT * FROM rooms where status='0'";
			}
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
			<!--<div class="row">
				<div class="col">
					<div class="pagination">
						<ul>
							<li class="active"><a href="#">01.</a></li>
							<li><a href="#">02.</a></li>
							<li><a href="#">03.</a></li>
							<li><a href="#">04.</a></li>
						</ul>
					</div>
				</div>
			</div>-->
		</div>
	</div>
<?php include_once("footer.php") ?>