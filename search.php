<?php
require_once('backend.php');
$serial = $_POST['serial'];
$con= new DB();
$data =$con->searchData($serial);
echo json_encode($data);

?>