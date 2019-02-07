<?php
	$con = mysqli_connect("localhost","root","","rental_rooms");
	$table=$_GET['table'];
	$no=$_GET['no'];
	$count=$_GET['id'];
	if (!$con){
    die('Could not connect:'. mysqli_error($con));
	}
	$sql="SELECT $no FROM $table where rid ='".$count."'";
	$result = mysqli_query($con,$sql);
	while($row = mysqli_fetch_array($result)) 
	{
		echo $row[0];
	}
?>	