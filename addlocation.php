<?php
include'header.php';
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class='container mr-5 mt-5 bg-white text-dark'>
<form form action="insert_location.php" method="post">
  <div class="form-group mt-1">
   
    <input type="text" class="form-control" name="location" placeholder="Enter Location">
    
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary mb-2">Add</button>
</form>
</div>