<?php
session_start();
require 'db.php';

$dealer=mysqli_real_escape_string($conn,$_GET['dealers']);
$date=date('Y-m-d');
$_SESSION['dealer']=$dealer;
$watu=$_SESSION['dealer'];




// foreach ($_GET['framework'] as $selectedOption)
//     echo $selectedOption ."\n";

	if(isset($_GET["framework"]))
	{
		
		$list = $_GET['framework'];
		$framework=$_GET["framework"];
		$num=count($list);
	for($i=0; $i < $num;$i++)
			 {
				 $serial=$framework[$i];
	 $query = "UPDATE alocate_serial set alocate=0,dealer='$watu' where `serial`='$serial'";
	 if(mysqli_query($conn, $query))
	 {
		 $s="INSERT INTO `ledger`( `serial`, `date`, `vendor`) VALUES('$serial','$date','$watu')";
	mysqli_query($conn,$s) or die($conn) ;
	 
	 }
	 else
	 {
		 echo "what the hell";
	 }
	}
	echo "successful";
	sleep(8);
	 header('location:index01.php');
	}
 /*$list = $_POST['framework'];

$items=implode( ", ", $list );


$devices=explode(",",$items) ;*/
/*$connect = mysqli_connect("localhost", "root", "", "testing");*/
// if(isset($_POST["framework"]))
// {	

	
// 	$framework=$_POST['framework'];
// 	$num=count($_POST['framework']);
		
// for($i=0; $i < $num;$i++)
//          {
//          	$serial=$framework[$i];
//  $query = "UPDATE alocate_serial set alocate=0,dealer='$watu' where `serial`='$serial'";
//  if(mysqli_query($conn, $query))
//  {
//  	$s="INSERT INTO `ledger`( `serial`, `date`, `vendor`) VALUES('$serial','$date','$watu')";
// mysqli_query($conn,$s) or die($conn) ;
 
//  }
//  else
//  {
//  	echo "what the hell";
//  }
// }
//  header('location:index-1.php');
// }
/*
for ($i=0; $i <count($devices) ; $i++) { 
	# code...
	$serial=$items;
	$sql="UPDATE alocate_serial set alocate=0,dealer='$dealer' where `serial`='$serial'";

$query=mysqli_query($conn,$sql) ;
if ($query===true) {
	# code...
	$s="INSERT INTO `ledger`( `serial`, `date`, `vendor`) VALUES('$serial','$date','$dealer')";
mysqli_query($conn,$s) or die($conn) ;
echo $serial;
	
} else {
	# code...
	echo "record not transfered";
	
}
}
*/

?>