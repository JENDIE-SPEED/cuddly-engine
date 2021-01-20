<?php

session_start();
require 'auth.php';
include 'db.php';
$role=$_SESSION['role'];
if ($role==='dealers') {
  # code...
include 'dealerheader.php';
}
elseif ($role==='user'){
  # code...
  include 'userheader.php';
}
else {
  include 'header.php';
};


?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class='container  mt-5 bg-white text-dark'>
<form action="insertpulse.php" method="post">
  <div class="form-row">
    <div class="col-5 mt-1 ">
      <input type="text" class="form-control" placeholder="Make">
    </div>
    <div class="col mt-1" >
      <input type="text" class="form-control" placeholder="Model">
    </div>
    <div class="col mt-1">
      <input type="text" class="form-control" placeholder="Pulse">
    </div>
  </div>
  <button type="submit" class="btn btn-primary mb-2 mt-1">Add</button>
</form>


</div>