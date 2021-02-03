<?php
session_start();
include 'db.php';
require 'auth.php';
$email=$_SESSION['user'];
$otp=mysqli_real_escape_string($conn, $_POST['otp']);
/*$sql="SELECT * FROM otp where email='$email'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);*/
$onetime='1234';
$rits='8456';
$alan='1234';
$role=$_SESSION['role'];
  
	# code...
	/*if (strcmp($otp, $onetime) === 0 && ($role==='admin' ))
	{
		
    
		header('location:index-u.php');
	}
	*/
	
	if (strcmp($otp, $onetime) === 0  && $role==='accounts') {
		# code...
		header('location:index-accounts.php');
	}
	elseif (strcmp($otp, $onetime) === 0  && ($role==='dealers')) {
		# code...
		header('location:index-dealer.php');
	}
	elseif (strcmp($otp, $onetime) === 0  && ($role==='stock')) {
		# code...
		header('location:index-stock.php');
	}
	elseif (strcmp($otp, $onetime) === 0  && ($role==='user')) {
		# code...
		header('location:index-user.php');
	}
	elseif (strcmp($otp, $onetime) === 0  && ($role==='super admin')) {
		# code...
		header('location:switch.php');
	}
	elseif (strcmp($otp, $onetime) === 0  && ($role==='admin')) {
		# code...
		header('location:index-admin.php');
	}
	elseif (strcmp($otp, $onetime) === 0  && ($role==='director')) {
		# code...
		header('location:index-dir.php');

	}	
	elseif (strcmp($otp, $rits) === 0  && ($email==='ritzcartrackandtracing@gmail.com')) {
		# code...
		header('location:index-user.php');
	}
	else
	{
		header('location:otp.html');
	}
?>