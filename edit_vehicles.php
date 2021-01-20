<?php
session_start();
require 'db.php';
include'header.php';

    $company=$_SESSION['company'];
    $unique=$_GET['unique'];
    $_SESSION['unique']=$unique;
    $sql="SELECT * FROM `client_account` WHERE `key`='$unique' ";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class='container  mt-5 bg-white text-dark'>

            <div class="wrap-table100">
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
           
</table>
</div>
  
  <div class="table100-body js-pscroll">
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                                <tr class="info">
                                    
                                        <td><strong >NAME</strong></td>
                          <td><?php echo $row['username']; ?></td>
                          <td><strong >CONTACT</strong></td>
                          <td><?php echo $row['password']; ?></td>
                                       
                          
                          
                            </tr>
                            <tr class="info">
                          
                          
                            </tr> 
                            <form method="post" action="edit.php">
                                
                            
                            <tr class="info">
                          <td><strong >NEW NAME</strong></td>
                          <td><input type="text" name="name"></td>
                           
                          <td><strong>print</strong></td>
      <td><button class="btn btn-success btn-mini" type="submit" > <strong>EDIT</strong></button></td>
                            </tr> 
                              
                          
    
    <tr class="info">
      
    </tr>
    <tr class="success">
      
      
    </tr>
    </form>
  </tbody>

</table>
                </div>
            </div>
        </div>
    </div>
   
    <script type="text/javascript">
  $(function() {
    $('#datetimepicker4').datetimepicker({
      pickTime: false
    });
  });$(function() {
    $('#datetimepicker1').datetimepicker({
      pickTime: false
    });
  });
</script>

