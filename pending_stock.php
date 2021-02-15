<?php

session_start();
require 'auth.php';
include 'db.php';
include 'headerconfig.php';
$company=$_SESSION['company'];

?>
<div class='container  mt-5 bg-white text-dark'>

<div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
   <form method="post" id="framework_form" enctype="multipart/form-data" action="pendingstock.php" >
    <div class="form-group">
     <label>Select Serial</label>
     <?php

    echo "<input id='serial' list='serial1' placeholder='Search Serial' class='form-control' name='framework[]' multiple='multiple' multiple class='form-control' required >
    <datalist id='serial1'>";
    //$sql="SELECT serial FROM alocate_serial";
    $sql="SELECT * from `alocate_serial` Where alocate=0  and dealer='$company'";
 
    $result=mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_array($result)) {
        $name=$row['serial'];
        ?>
        <option value="<?php echo $name ?>" ><?php echo $row['serial']; ?></option>
        <?
    }

    echo "</datalist>";
   

      ?>
    
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
 $('#framework').multiselect({
  nonSelectedText: 'Select serial',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 
  });

</script>

</div>