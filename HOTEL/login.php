<?php

include("connection.php");

$uname=$_POST["uname"];
$pwd=$_POST["pwd"];


$resv= mysqli_query($con,"select * from usr where userid='".$uname."' and password='".$pwd."'");


if(mysqli_num_rows($resv)<=0) 
{
	header("location:booking.php");
	exit();
}

else header("location:bookingmain.php");

	
?>
