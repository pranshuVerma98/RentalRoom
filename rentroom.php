<?php
if(isset($_POST['SubmitButton']))
{
	$img1 = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
	$img2 = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
	$uimg = addslashes(file_get_contents($_FILES['uimg']['tmp_name']));
	$image_size = getimagesize($_FILES['img1']['tmp_name']);
	if ($image_size==FALSE)
	{	
		echo "<script>alert('Upload At Least One Image'); </script>";
	}
  else
  { 
	$conn = mysqli_connect("localhost","root","","rental_rooms");
	#insert into room table
	$sql="INSERT INTO `rooms` VALUES ('','".$_POST['tittle']."','".$_POST['raddress']."','".$_POST['location']."',".$_POST['pincode'].",".$_POST['bedroom'].",".$_POST['bathroom'].",".$_POST['area'].",".$_POST['price'].",'".$_POST['type']."',' ".$_POST['desc']." ',' ".$_POST['extra']." ',' ".$_POST['cond']." ','$img1','$img2','0') ";
	$i=mysqli_query($conn,$sql);
	#extract from room table
	$sql="SELECT `rid` FROM `rooms` WHERE `Address`='".$_POST['raddress']."'";
	$j=mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($j)) 
			{
				$rid="rid".$row[0]; break;
			}
	#insert into user table
	$sql="INSERT INTO `users` VALUES ('','$rid','".$_POST['name']."','".$_POST['email']."',".$_POST['mobile'].",'".$_POST['aadhar']."','".$_POST['address']."',".$_POST['pin'].",'$uimg')";
	$k=mysqli_query($conn,$sql);
	if($i && $j && $k)
	{	
		include_once("header.php");?>
		<div class="cities">
		<div class="cities_container d-flex flex-row flex-wrap align-items-start justify-content-between">
		<div class="city">
			<div class="city_overlay">
			<div class="city_title">Your Data Uploaded Successfully.</div>
			<div class="city_subtitle">Your Room id is <?php echo $rid; ?>.</div>
			<div class="city_subtitle"><p>You can Use them just to change your data.<br> We will send All information on Your Phone via sms.<br>
			<a href="change.php?rid=<?php echo $rid; ?> ">Your change detail Link.</a><br>
			Thanks for your support.</p></div></div>
			</div>
			</div>
		</div>
		</div>
		<?php
		include_once("footer.php");
	}
	else
	{
		echo "<script>alert('An error Occured, Try again'); </script>";
		$sql="DELETE FROM `rooms` WHERE `Address`='".$_POST['raddress']."'";
		$i=mysqli_query($conn,$sql);
	}
}
}
include_once("header.php") 
?>
	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Contact Info -->
				<div class="col-lg-6">
					<div class="contact_info">
						<div class="section_title">Looking For Paying Guest?</div>
						<div class="section_subtitle">Fill All Forms</div>
						<div class="contact_info_text"><p>*Please Fill All details Correctly.</p></div>
						<div class="contact_info_content">
						<h5>Write Your Personal Deatils Below :</h5>
							<form action="<?=$_SERVER['PHP_SELF'];?>" class="contact_form" id="contact_form" method="POST" enctype="multipart/form-data">
							<div class="row">
								<!-- Address -->
								<div class="col-lg-4 contact_name_col">
									<p>*NAME:</p>
								</div>
								<div class="col-lg-8">
									<input type="text" class="contact_input" placeholder="Name" required="required" name="name">
								</div>
							</div>
							<div class="row">
								<!-- Email -->
								<div class="col-lg-4 contact_name_col">
									<p>*Email:</p>
								</div>
								<div class="col-lg-8">
									<input type="email" class="contact_input" placeholder="Email" required="required" name="email">
								</div>
							</div>
							<div class="row">
								<!-- Contact -->
								<div class="col-lg-4 contact_name_col">
									<p>*Mobile:</p>
								</div>
								<div class="col-lg-8">
									<input type="number" class="contact_input" placeholder="Mobile No" required="required" name="mobile">
								</div>
							</div>
							<div class="row">
								<!-- Address -->
								<div class="col-lg-4 contact_name_col">
									<p>*Your Address:</p>
								</div>
								<div class="col-lg-8">
									<input type="text" class="contact_input" placeholder="Your Full Address" required="required" name="address">
								</div>
							</div>
							<div class="row">
								<!-- Pincode -->
								<div class="col-lg-3 contact_name_col">
									<p>*Pin code:</p>
								</div>
								<div class="col-lg-9">
									<input type="text" class="contact_input" placeholder="Pin code" required="required" name="pin">
								</div>
							</div>
							<div class="row">
								<!-- Aadhar No -->
								<div class="col-lg-3 contact_name_col">
									<p>Aadhar No:</p>
								</div>
								<div class="col-lg-9">
									<input type="number" class="contact_input" placeholder="Your Aadhar No(For verification)" name="aadhar">
								</div>
							</div>
							<div class="row">
								<!-- Images -->
								<div class="col-lg-4 contact_name_col">
									<p>Upload Your 1 Photo</p>
								</div>
								<div class="col-lg-8">
									<input type="file" name="uimg" value="fileupload" id="uimg">
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-6">
					<div class="contact_form_container">
					<h5>Write All Details about Room Below :</h5>
						<div class="row">
								<!-- tittle -->
								<div class="col-lg-3 contact_name_col">
									<p>Put A tittle : </p>
								</div>
								<div class="col-lg-9">
									<input type="text" class="contact_input" placeholder="Tittle" name="tittle">
								</div>
						</div><br><div class="row">
								<!-- Address -->
								<div class="col-lg-3 contact_name_col">
									<p>*Address : </p>
								</div>
								<div class="col-lg-9">
									<div><textarea class="contact_textarea contact_input" placeholder="Address" required="required" name="raddress"></textarea></div>
								</div>
						</div><br><div class="row">
								<!-- Location -->
								<div class="col-lg-3 contact_name_col">
									<p>*Location : </p>
								</div>
								<div class="col-lg-9">
									<input type="text" class="contact_input" placeholder="Location" required="required" name="location">
								</div>
						</div><br>
						<div class="row">
								<!-- Pincode -->
								<div class="col-lg-3 contact_name_col">
									<p>*Pincode : </p>
								</div>
								<div class="col-lg-9">
									<input type="text" class="contact_input" placeholder="Pincode" required="required" name="pincode">
								</div>
						</div><br>
						<div class="row">
								<!-- No of Bed Rooms -->
								<div class="col-lg-6 contact_name_col">
									<input type="number" class="contact_input" placeholder="*No Of Bed Rooms" required="required" name="bedroom">
								</div>
								<!-- No Of Bath rooms -->
								<div class="col-lg-6">
									<input type="Number" class="contact_input" placeholder="*No Of Bath Rooms" required="required" name="bathroom">
								</div>
						</div><br>
						<div class="row">
								<!--Price -->
								<div class="col-lg-6 contact_name_col">
									<p>*Price: </p>
								</div>
								<div class="col-lg-6">
									<input type="Number" class="contact_input" placeholder="Price in Rs" name="price" required="required">
								</div>
						</div><br>
						<div class="row">
								<!-- Area-->
								<div class="col-lg-6 contact_name_col">
									<input type="number" class="contact_input" placeholder="*Area Sq Ft." required="required" name="area">
								</div>
								<!-- Type -->
								<div class="col-lg-6 contact_name_col" >
										<select class="search_form_select" name="type">
											<option disabled selected>Type Of Room</option>
											<option>Simple Room</option>
											<option>P.G.</option>
											<option>Girls Hostal</option>
											<option>Boys Hostal</option>
											<option>Full Floar</option>
										</select>
								</div>
						</div><br>
						<div class="row">
								<!-- Description -->
								<div class="col-lg-3 contact_name_col">
									<p>*Description : </p>
								</div>
								<div class="col-lg-9">
									<div><textarea class="contact_textarea contact_input" placeholder="Description" required="required" name="desc"></textarea></div>
								</div>
						</div><br>
						<div class="row">
								<!-- Extra -->
								<div class="col-lg-3 contact_name_col">
									<p>Extra Facilities: </p>
								</div>
								<div class="col-lg-9">
									<div><textarea class="contact_textarea contact_input" placeholder="Extra Facilities" name="extra"></textarea></div>
								</div>
						</div><br>
						<div class="row">
								<!-- Cond -->
								<div class="col-lg-3 contact_name_col">
									<p>*Condtions: </p>
								</div>
								<div class="col-lg-9">
									<div><textarea class="contact_textarea contact_input" placeholder="Conditions for paying guest" name="cond" required="required"></textarea></div>
								</div>
						</div><br>
						<div class="row">
								<!-- Images -->
								<div class="col-lg-4 contact_name_col">
									<p>*Upload 2 images</p>
								</div>
								<div class="col-lg-8">
									<input type="file" name="img1" value="fileupload" id="img1" required="required"> <br> <br>
									<input type="file" name="img2" value="fileupload" id="img2">
								</div>
						</div><br>
							<input type="submit" class="contact_button button" name="SubmitButton"/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
include_once("footer.php") 
?>