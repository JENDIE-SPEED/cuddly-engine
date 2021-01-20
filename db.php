<?php 
$conn = mysqli_connect("localhost","root", "JAMESKINUTHIA", "alexa");
if (!$conn) {
	# code...
	die("Connection Failed:".mysqli_connect_error());
}
?>
