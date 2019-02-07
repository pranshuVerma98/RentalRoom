<?php
	session_start();
	if(array_key_exists('Email',$_SESSION) && !empty($_SESSION['Email'])) {
    header('Location: index.php');
	}
	if(isset($_POST['login']))
	{
		$user=$_POST['exampleInputEmail1'];
		$pass=$_POST['exampleInputPassword1'];
		$conn = mysqli_connect("localhost","root","","shortme");
	if (!$conn) 
	{
	    die("Connection failed");
	}
		$query="select pass from users where email= '".$user."'";
		$i=mysqli_query($conn,$query);
	 while($row = mysqli_fetch_array($i)){
           $hashed_password=$row[0];
        }
		if(mysqli_num_rows($i)>0)
		{
		if (md5($pass)==$hashed_password) 
		{
			session_start();
			$_SESSION['Email']=$user;
			header('Location: index.php'); 
   		}else
		{
		echo "<script>alert('Password Wrong');window.location.href='login.php';</script>";
		}
	}else
	{
	echo "<script>alert('Seems! You Don't Have an account');window.location.href='login.php';</script>";
	}
	}
	else
	{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Login Page Sign Up">
    <title>Sign In Page</title>

    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/contact.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
	<div class="contact">
		<div class="container">
			<div class="row">
				<!-- Contact Form -->
				<div class="col-lg-8">
					<div class="contact_form_container">
						<div class="contact_info">
						<div class="section_title">LOGIN PAGE</div><br><br>
						<form action="#" class="contact_form" id="contact_form">
							<div class="row">
								
								<!-- Email -->
								<div class="col-lg-6">
								
									<input type="email" class="contact_input" placeholder="E-mail" required="required">
								</div>
								<!-- Password -->
								<div class="col-lg-6 contact_name_col">
									<input type="Password" class="contact_input" placeholder="Password" required="required">
								</div>
							</div>
							<button class="contact_button button">LOGIN</button>
						</form>
						</div>
					</div>
				</div>
				<div class="col-lg-1" style="border-left:6px solid blue;height:400px">
				</div>
				<div class="col-lg-3">
					<div class="contact_info">
						<button class="contact_button button" onClick="document.location.href='forget.php'">Forget Password</button><br>
						<button class="contact_button button" onClick="document.location.href='register.html'">Register Now</button><br>
						<button class="contact_button button" onClick="document.location.href='index.php'">Home</button><br>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="js/contact.js"></script>
  </body>
</html>
	<?php } ?>