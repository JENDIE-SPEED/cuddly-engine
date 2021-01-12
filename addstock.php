<?php
include'header.php';
?>

<div class='container mr-5 mt-5 bg-white text-dark'>
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