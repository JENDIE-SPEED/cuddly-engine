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
else{
  echo'invalid!';
}
?>