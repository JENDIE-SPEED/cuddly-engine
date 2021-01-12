<?php
include'header.php';
?>

<div class='container mr-5 mt-5 bg-white text-dark'>
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