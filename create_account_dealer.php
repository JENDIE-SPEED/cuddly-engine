<?php

session_start();
require 'auth.php';
include 'db.php';
include 'headerconfig.php';




$company=$_SESSION['company'];
$serial=$_GET['serial'];
$user=  $_SESSION['user'];
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<div class='container mt-5 bg-white text-dark'>
                   
                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
           
</table>
</div>
  
  <div class="table100-body js-pscroll">
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                                <?php 
                                $sql="SELECT * FROM work WHERE `serial`='$serial'";
                                $query=mysqli_query($conn,$sql);
                                while ($row=mysqli_fetch_array($query)) {
                                    $_SESSION['cus_name']=$row['cus_name'];
                                    $_SESSION['cus_password']=$row['contact'];
                                    ?>
                                    
                                
                                <tr class="info">
                          <td><strong >NAME</strong></td>
                          <td><?php echo $row['cus_name']; ?></td>
                          <td><strong >CONTACT</strong></td>
                          <td><?php echo $row['contact']; ?></td>
                          
                            </tr>
                            <tr class="info">
                          
                          
                            </tr> 
                            <tr class="info">
                          <td><strong >REGISTRATION</strong></td>
                          <td><?php echo $row['reg_no']; ?></td>
                           <td><strong >CHASIS</strong></td>
                          <td><?php echo $row['chasis']; ?></td>
                          
                            </tr> 
                            <tr class="info">
                         
                          
                            </tr> 
                             <tr class="info">
                          <td><strong >MAKE</strong></td>
                          <td><?php echo $row['make']; ?></td>
                          <td><strong >MODEL</strong></td>
                          <td><?php echo $row['model']; ?></td>
                            </tr> 
                             <tr class="info">
                          
                          
                            </tr>   

                            <tr class="info">
                              <td><strong >SERIAL</strong></td>
                              <td><?php echo $row['serial']; ?></td>
                              <td><strong>TECHNICIAN</strong></td>
                          <td><?php echo $row['tech']; ?></td>
                            </tr>   
                            <tr class="info">
                          
      
    </tr>
    <tr class="info">
      <td><strong>SERVICE TYPE</strong></td>
      <td><?php echo $row['problem']; ?></td>
      <td><strong>COMMENT</strong></td>
      <td><?php echo $row['action']; ?></td>
    </tr>
    <?php
}
?>
    <tr class="success">
      <td><strong>PROCEED</strong></td>
      <td><a  href="create_ralp.php?serial=<?php echo $serial;?>"><button class="btn btn-success btn-mini" > <strong>CREATE</strong></button></a></td>
      <td><strong style="color:red;"> CANCEL</strong></td>
       <td><a href="index01.php"><button class="btn btn-secondary btn-mini" >Back</button></a></td>
    </tr>
    
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
