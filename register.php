<?php
/*
1. You have not done anything for users image in line no. 23	
*/
	date_default_timezone_set("Asia/Kolkata");
	if(isset($_POST['register']))
	{
	$conn = mysqli_connect("localhost","root","","shortme");
	if (!$conn) 
	{
	    die("Connection failed");
	}
	else
		{
		$fname=$_POST['exampleInputName'];
		$lname=$_POST['exampleInputLastName'];
		$pass=md5($_POST['exampleInputPassword1']);
		$Email=$_POST['exampleInputEmail1'];
		$no=$_POST['exampleInputmobile'];
		$gender=$_POST['gender'];
		$url_id=uniqid();
$query="INSERT INTO `users` VALUES ('$fname', '$lname', '$Email', '$pass', '$no', '$gender','','$url_id')";
	$i=mysqli_query($conn,$query);
	if($i)
	{
	// ---------------- SEND MAIL FORM ----------------
// send e-mail to ...
/*	$to=$Email;

	// Your subject
	$subject="Your confirmation link here";
	$header="from: Tech-test <pranshu.verma98@gmail.com>";
	$message="Your Comfirmation link \r\n";
	$message.="Click on this link to activate your account \r\n";
	$message.="http://www.tech-test.com/dashboard/confirmation.php?passkey=$pass";
	//$sentmail = mail($to,$subject,$message,$header);
	if($sentmail){
	echo "Your Confirmation link Has Been Sent To Your Email Address.";
	}
	else {
	echo "Cannot send Confirmation link to your e-mail address";
	}
*/		
		echo "<script>alert('You Are Registered Succesfully');window.location.href='login.php';</script>";
	}else
			{
	echo "<script>alert('You Are Already Register');window.location.href='register.html';</script>";
			}
			mysqli_close($conn);
		}
	}
?>