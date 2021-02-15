<?php

session_start();
require 'auth.php';
include 'db.php';
include 'headerconfig.php';
$company=$_SESSION['company'];
$user=  $_SESSION['user'];

?>
 <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
 <link rel="stylesheet" href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006288/BBBootstrap/choices.min.css?version=7.0.0">
<script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1569006273/BBBootstrap/choices.min.js?version=7.0.0"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<style>
.mt-100 {
    margin-top: 100px
}

body {
  
    min-height: 100vh
}
</style>

<div class='container  mt-5 bg-white text-dark'>

<table>
   <form method="post" id="framework_form" enctype="multipart/form-data" action="reverse_stock.php" >
    <div class="form-group">
    
     
     <select  multiple data-live-search="true" id="choices-multiple-remove-button" name="framework[]" multiple="multiple" multiple class="form-control" placeholder="Search Serial">
      <?php
                            $sql="SELECT * from `alocate_serial` Where  sold=0 ";
                                $result=mysqli_query($conn,$sql);
                                while ($row=mysqli_fetch_array($result)) {
                                    $name=$row['serial'];
                                    $_SESSION['watu']=$row['dealer'];
                                    ?>
                                    <option value="<?php echo $name ?>" ><?php echo $row['serial']; ?></option>
                                    <?
                                }?>
                            
     </select>
     
    
    
    </div>
    </div>
    
     <input type="submit" class="btn btn-info" name="submit"/>
  
   </form>
   </table>
   <br />
  </div>
 </body>
</html>

<script>
  $(document).ready(function(){

var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
removeItemButton: true,
maxItemCount:5,
searchResultLimit:5,
renderChoiceLimit:5
});


});

 


</script>



