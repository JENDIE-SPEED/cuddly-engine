<?php

session_start();
require 'auth.php';
include 'db.php';
include 'headerstock.php'

?>
<div class="container bg-white mt-4">
    <h2>AUTHORIZATION FOR CANCELLATION OF CERTIFICATE</h2>
    <form method="post" action="certauth.php"> 
  <div class="row">
    <div class="col-4">
      <input type="date" class="form-control" name="date" >
    </div>
   
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">REASON :</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="reason"></textarea>
  </div>
    <button type="submit" class="btn btn-primary mb-2">Submit For Approval</button>
</form>
  </div>  