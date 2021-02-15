<?php
session_start();
include 'headeraccount.php';
require 'auth.php';
include 'db.php';
$company=$_SESSION['company'];
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class="container mt-5 " style="background-color:white;">
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table  >
   <form method="post" id="framework_form" enctype="multipart/form-data" action="allocate_dealer_stock.php" >
    
     <tr><td width="80px"><label>Serial</label></td>
     <td><select id="framework" name="framework[]" multiple="multiple" multiple class="form-control" >
      <?php
      
          # code...
        $sql="SELECT * from `alocate_serial` Where alocate=1 and sold=1 ";
                                $result=mysqli_query($conn,$sql);
                                while ($row=mysqli_fetch_array($result)) {
                                    $name=$row['serial'];
                                    ?>
                                    <option value="<?php echo $name ?>" ><?php echo $row['serial']; ?></option>
                                    <?php
                                }
      
      
                            ?>
                            
                         </select></td> </tr><tr><td width="80px"> <label> Dealer</label></td>
                        <td> <select name="dealers" required/>
                            <option value="1" >DEFAULTER</option>
                            <option value="0" >PAID</option>
                                   
                                </select></td>
                            </tr>
                            
    </div>
    </div>
    <tr>
        <td><label>Submit</label></td>
        <td>
     <input type="submit" class="btn btn-info" name="submit"/>
     </td>
 </tr>
    </div>
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


