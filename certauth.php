<?php
session_start();
include 'db.php';

$Date = mysqli_real_escape_string($conn, $_POST['date']);
$Reason = mysqli_real_escape_string($conn, $_POST['reason']);

$sql = "INSERT INTO cert_cancel (`Date`, `Reason`) VALUES ( '$Date','$Reason' )";
$retval = mysqli_query($conn,$sql);

if(! $retval ) {
   die('Could not enter data: ' . mysqli_error($conn));
}
echo'succesful';
header('location:stockcancel.php');

mysqli_close($conn);

?>