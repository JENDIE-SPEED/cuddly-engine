<?php

session_start();
require 'auth.php';
include 'db.php';
$role=$_SESSION['role'];
if ($role==='dealers') {
  # code...
include 'dealerheader.php';
}
elseif ($role==='user'){
  # code...
  include 'userheader.php';
}
else {
  include 'header.php';
};


?>

<div class='container  mt-5 bg-white text-dark'>
<div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
   <form method="post" id="framework_form" enctype="multipart/form-data" action="pendingstock.php" >
    <div class="form-group">
     <tr><td><label>Select Serial</label></td>
     <td><select id="framework" name="framework[]" multiple="multiple" multiple class="form-control" >
                                  
     </select></td></tr>
     
    
    </div>
    </div>
    <tr>
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



</div>