<?php
session_start();
$conn = mysqli_connect("localhost","root","","rental_rooms");
if(isset($_POST['SubmitButton']))
{
	$rid=$_SESSION['rid'];
	if(isset($_POST['img1']))
	{	
	$img1 = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
	$sql="UPDATE `rooms` SET `img1`='$img1'";
	$m=mysqli_query($conn,$sql);
	}
	if(isset($_POST['img2']))
	{
	$img2 = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
	$sql="UPDATE `rooms` SET `img2`='$img2'";
	$n=mysqli_query($conn,$sql);
	}
	if(isset($_POST['uimg']))
	{
	$uimg = addslashes(file_get_contents($_FILES['uimg']['tmp_name']));
	$sql="UPDATE `users` SET `img1`='$uimg'";
	$o=mysqli_query($conn,$sql);
	}
	#insert into room table
	$sql="UPDATE `rooms` SET `Tittle`='".$_POST['tittle']."',`Address`='".$_POST['raddress']."',`Location`='".$_POST['location']."',`Pincode`=".$_POST['pincode'].",`Bedroom`=".$_POST['bedroom'].",`Bathroom`=".$_POST['bathroom'].",`Area`=".$_POST['area'].",`price`=".$_POST['price'].",`type`='".$_POST['type']."',`des`='".$_POST['desc']."',`Extra`='".$_POST['extra']."',`cond`='".$_POST['cond']."' WHERE `rid`=".(int)(substr($rid,3));
	$i=mysqli_query($conn,$sql);
	#insert into user table
	$sql="UPDATE `users` SET `name`='".$_POST['name']."',`email`='".$_POST['email']."',`mobile`=".$_POST['mobile'].",`aadhar`='".$_POST['aadhar']."',`address`='".$_POST['address']."',`pincode`=".$_POST['pin']." WHERE `rid`='".$rid."'";
	$k=mysqli_query($conn,$sql);
	if($i && $k)
	{	
	echo "<script>alert('Your data is successfully uploaded.');</script>";
	session_destroy();
	header("Location:change.php");
	}
	else
	{
		header("Location:change.php?rid=$rid");
	}
}
else if(isset($_POST['deleteButton']))
{
	$sql="DELETE FROM `users` WHERE `rid`='".$rid."'";
	$i=mysqli_query($conn,$sql);
	$sql="DELETE FROM `rooms` WHERE `rid`=".(int)(substr($rid,3));
	$i=mysqli_query($conn,$sql);
}
else if(isset($_GET['rid'])!=TRUE && (isset($_POST['value']))!=TRUE)
	{
		include_once("header.php");?>
		<div class="cities">
		<div class="cities_container d-flex flex-row flex-wrap align-items-start justify-content-between">
		<div class="city">
		<div class="newsletter_form_container">
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method= "POST" class="newsletter_form">
			<h6>Your Room id <input type="text" class="newsletter_input" placeholder="Your room id" required="required" name="roomid">
			</h6>	
		<input type="submit" name="value" class="button" value="change">
		</form>
		</div>
		</div>
		</div>
		</div>
		<?php
		include_once("footer.php");
	}
else
{
	if(isset($_POST['value']))
{
	$count=$_POST["roomid"];
}
else
{
	$count=$_GET['rid'];
}	$_SESSION['rid']=$count;
	$sql="SELECT * FROM users JOIN rooms where users.rid ='$count' and rooms.status='0'";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)) 
	{
	$title=$row[10];
	$name=$row[2];$email=$row[3];$mobile=$row[4];$uimg=$row[8];$uaddress=$row[6];$aadhar=$row[5];$upin=$row[7];
	$address=$row[11];$location=$row[12];$pin=$row[13];
	$bed=$row[14];$bath=$row[15];$area=$row[16];
	$des=$row[19];$fac=$row[20];$price=$row[17];
	$img1=$row[22];$img1=$row[23];$type=$row[18];$cond=$row[21];
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
						<div class="section_title">Want to update details?</div>
						<div class="section_subtitle">Fill All Forms</div>
						<div class="contact_info_text"><p>*Please Fill All details Correctly.<br>(previous images are store if You want to rewrite then upload it otherwish leave it.)</p></div>
						<div class="contact_info_content">
						<h5>Write Your Personal Deatils Below :</h5>
							<form action="<?=$_SERVER['PHP_SELF'];?>" class="contact_form" id="contact_form" method="POST" enctype="multipart/form-data">
							<div class="row">
								<!-- Address -->
								<div class="col-lg-4 contact_name_col">
									<p>*NAME:</p>
								</div>
								<div class="col-lg-8">
									<input type="text" class="contact_input"  name="name" value="<?php echo $name;?>">
								</div>
							</div>
							<div class="row">
								<!-- Email -->
								<div class="col-lg-4 contact_name_col">
									<p>*Email:</p>
								</div>
								<div class="col-lg-8">
									<input type="email" class="contact_input" name="email" value="<?php echo $email;?>" >
								</div>
							</div>
							<div class="row">
								<!-- Contact -->
								<div class="col-lg-4 contact_name_col">
									<p>*Mobile:</p>
								</div>
								<div class="col-lg-8">
									<input type="number" class="contact_input" value="<?php echo $mobile;?>" name="mobile">
								</div>
							</div>
							<div class="row">
								<!-- Address -->
								<div class="col-lg-4 contact_name_col">
									<p>*Your Address:</p>
								</div>
								<div class="col-lg-8">
									<input type="text" class="contact_input" value="<?php echo $uaddress;?>" name="address">
								</div>
							</div>
							<div class="row">
								<!-- Pincode -->
								<div class="col-lg-3 contact_name_col">
									<p>*Pin code:</p>
								</div>
								<div class="col-lg-9">
									<input type="text" class="contact_input" value="<?php echo $upin;?>" name="pin">
								</div>
							</div>
							<div class="row">
								<!-- Aadhar No -->
								<div class="col-lg-3 contact_name_col">
									<p>Aadhar No:</p>
								</div>
								<div class="col-lg-9">
									<input type="number" class="contact_input" value="<?php echo $aadhar;?>" name="aadhar">
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
									<input type="text" class="contact_input" value="<?php echo $title;?>" name="tittle">
								</div>
						</div><br><div class="row">
								<!-- Address -->
								<div class="col-lg-3 contact_name_col">
									<p>*Address : </p>
								</div>
								<div class="col-lg-9">
			<div><?php echo "<textarea class='contact_textarea contact_input' name='raddress'>$address</textarea></div>";?>
								</div>
						</div><br><div class="row">
								<!-- Location -->
								<div class="col-lg-3 contact_name_col">
									<p>*Location : </p>
								</div>
								<div class="col-lg-9">
									<input type="text" class="contact_input" value="<?php echo $location;?>" name="location">
								</div>
						</div><br>
						<div class="row">
								<!-- Pincode -->
								<div class="col-lg-3 contact_name_col">
									<p>*Pincode : </p>
								</div>
								<div class="col-lg-9">
									<input type="text" class="contact_input" value="<?php echo $pin;?>" name="pincode">
								</div>
						</div><br>
						<div class="row">
								<!-- No of Bed Rooms -->
								<div class="col-lg-6 contact_name_col">
									<input type="number" class="contact_input" value="<?php echo $bed;?>" name="bedroom">
								</div>
								<!-- No Of Bath rooms -->
								<div class="col-lg-6">
									<input type="Number" class="contact_input" value="<?php echo $bath;?>" name="bathroom">
								</div>
						</div><br>
						<div class="row">
								<!--Price -->
								<div class="col-lg-6 contact_name_col">
									<p>*Price: </p>
								</div>
								<div class="col-lg-6">
									<input type="Number" class="contact_input" value="<?php echo $price;?>" name="price" >
								</div>
						</div><br>
						<div class="row">
								<!-- Area-->
								<div class="col-lg-6 contact_name_col">
									<input type="number" class="contact_input" value="<?php echo $area;?>" name="area">
								</div>
								<!-- Type -->
								<div class="col-lg-6 contact_name_col" >
										<select class="search_form_select" name="type" required="required">
											<option disabled selected value="">Type Of Room</option>
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
				<div><?php echo "<textarea class='contact_textarea contact_input' name='desc'>$des</textarea></div>";?>
							</div>
						</div><br>
						<div class="row">
								<!-- Extra -->
								<div class="col-lg-3 contact_name_col">
									<p>Extra Facilities: </p>
								</div>
								<div class="col-lg-9">
			<?php echo "<textarea class='contact_textarea contact_input' name='extra'>$fac</textarea></div>";?>
						</div><br>
						<div class="row">
								<!-- Cond -->
								<div class="col-lg-3 contact_name_col">
									<p>*Condtions: </p>
								</div>
								<div class="col-lg-9">
									<div>
			<?php echo "<textarea class='contact_textarea contact_input' name='cond'>$cond</textarea></div>";?>
								</div>
						</div><br>
						<div class="row">
								<!-- Images -->
								<div class="col-lg-4 contact_name_col">
									<p>*Upload 2 images</p>
								</div>
								<div class="col-lg-8">
									<input type="file" name="img1" value="fileupload" id="img1"> <br> <br>
									<input type="file" name="img2" value="fileupload" id="img2">
								</div>
						</div><br>
						<input type="submit" class="contact_button button" name="SubmitButton" value="Update"/>
						<input type="submit" class="contact_button button" name="deleteButton" value="Delete"/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
include_once("footer.php");
}
?>