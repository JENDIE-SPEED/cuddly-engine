<?php
$role=$_SESSION['role'];
$company=$_SESSION['company'];
if ($role==='dealers') {
  # code...
include 'dealerheader.php';
}
elseif ($role=='admin'){
  include 'headeradmin.php';
}
elseif ($role==='user'){
  # code...
  include 'userheader.php';
}
elseif($role==='super admin') {
  include 'header.php';
}

elseif($role==='director') {
  include 'header-director.php';
}
else{
  echo'invalid!';
}
?>