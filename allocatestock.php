<?php

session_start();
require 'auth.php';
include 'db.php';
$company=$_SESSION['company'];
include 'headerconfig.php';



?>
<!DOCTYPE html>
<html>
<head>
    <title>Multiselect Tutorial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006288/BBBootstrap/choices.min.css?version=7.0.0">
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006273/BBBootstrap/choices.min.js?version=7.0.0"></script>

</head>
<style>
    .mt-100 {
    margin-top: 100px
}





</style>

<div class='container  mt-5 bg-white text-dark'>

<form method="get" enctype="multipart/form-data" action="allocate_stock.php" id="framework_form" >

  <div class="form-group">
  <select class="form-control" id="choices-multiple-remove-button" name="framework[]" placeholder="Select Serial" multiple >
  <?php
      if ($company==="JENDIE") {
         # code...
       $sql="SELECT * from `alocate_serial` Where alocate=1 and sold=0 and dealer='JENDIE'";
                               $result=mysqli_query($conn,$sql);
                               while ($row=mysqli_fetch_array($result)) {
                                   $name=$row['serial'];
                                   ?>
                                   <option value="<?php echo $name ?>" ><?php echo $row['serial']; ?></option>
                                   <?
                               }
     } elseif($company==="AURUM STAR") {
         # code...
       $sql="SELECT * from `alocate_serial` Where alocate=1 and sold=0 and dealer='AURUM STAR'";
                               $result=mysqli_query($conn,$sql);
                               while ($row=mysqli_fetch_array($result)) {
                                   $name=$row['serial'];
                                   ?>
                                   <option value="<?php echo $name ?>" ><?php echo $row['serial']; ?></option>
                                   <?
                               }
     }
     ?>
  </select>
 
  </div>
  <div class="form-group">
  <?php
       echo "<input id='tech' list='tech1' placeholder='Search Technician' class='form-control'  name='dealers' required >
       <datalist id='tech1'>";
       $sql="SELECT * from users where position='dealers'";
       $result=mysqli_query($conn,$sql);
       while ($row=mysqli_fetch_array($result)) {
        $name=$row['company'];
        ?>
        <option value="<?php echo  $name ?>" ><?php echo $row['company']; ?></option>
        <?
    }?>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript">
 $(document).ready(function(){

var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
removeItemButton: true,
maxItemCount:50,
searchResultLimit:50,
renderChoiceLimit:50
});


});
</script>
</html>



