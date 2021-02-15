<?php

session_start();
require 'auth.php';
include 'db.php';
$role=$_SESSION['role'];

if($role==='super admin') {
  include 'headeraccount1.php';
}
elseif($role==='accounts') {
    include 'headeraccount.php';
  }
else{
  echo'invalid!';
}


?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class='container  mt-5 bg-white text-dark'>
<div class='container  mt-5 bg-white text-dark'>
<form>
  <div class="row">
    <div class="col">
    <label for="d1">Start Date</label>
      <input type="date" class="form-control m-1" id="d1" name="startdate" >
    </div>
    <div class="col">
    <label for="d2">End Date</label>
      <input type="date" class="form-control m-1" id="d2"  name="enddate">
    </div>
  </div>
  <div class="row">
    <div class="col">
    <select class="form-control m-2">
        <option>Renewals</option>
        <option>Installations</option>
        
    </select>
    </div>
    
  </div>
  <input type="submit" name="submit" class="btn btn-primary">

  
</form>
</div>
