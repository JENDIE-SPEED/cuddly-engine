<?php

session_start();
require 'auth.php';
include 'db.php';

include 'headerstock.php';



?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class='container mt-5 bg-white text-dark'>
<form method="post" action="excel.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlFile1">Select File</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
<div class="col-auto my-1">
      <button type="submit" class="btn btn-primary mb-1">Submit</button>
    </div>
</div>