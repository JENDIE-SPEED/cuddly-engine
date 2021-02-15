<?php
session_start();
require 'db.php';
$company=$_SESSION['company'];
include 'header.php';
$serial=$_GET['serial'];
$sql="SELECT * FROM work WHERE `serial`='$serial'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
$cus_name=$row['cus_name'];
$contact=$row['contact'];
$make=$row['make'];
$model=$row['model'];
$chasis=$row['chasis'];
$reg = $row['reg_no'];
$tech = $row['tech'];
$serial=$row['serial'];
$problem = $row['problem'];
$action=$row['action'];
$vin=$row['vin_no'];

$_SESSION['customer']=$cus_name;
$_SESSION['contact']=$contact;
$_SESSION['make']=$make;
$_SESSION['model']=$model;
$_SESSION['chasis']=$chasis;
$_SESSION['reg']=$reg;
$_SESSION['tech']=$tech;
$_SESSION['serial']=$serial;
$_SESSION['problem']=$problem;
$_SESSION['action']=$action;
$_SESSION['vin_no']=$vin;
?>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class='container mt-5 bg-white text-dark'>
     
  <div class="table100-body js-pscroll">
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                                <tr class="info">
                          <td><strong >NAME</strong></td>
                          <td><?php echo $_SESSION['customer']; ?></td>
                          <td><strong >CONTACT</strong></td>
                          <td><?php echo $_SESSION['contact']; ?></td>
                          
                            </tr>
                            <tr class="info">
                          
                          
                            </tr> 
                            <tr class="info">
                          <td><strong >REGISTRATION</strong></td>
                          <td><?php echo $_SESSION['reg']; ?></td>
                           <td><strong >CHASIS</strong></td>
                          <td><?php echo $_SESSION['chasis']; ?></td>
                          
                            </tr> 
                            <tr class="info">
                         
                          
                            </tr> 
                             <tr class="info">
                          <td><strong >MAKE</strong></td>
                          <td><?php echo $_SESSION['make']; ?></td>
                          <td><strong >MODEL</strong></td>
                          <td><?php echo $_SESSION['model']; ?></td>
                            </tr> 
                             <tr class="info">
                          
                          
                            </tr>   

                            <tr class="info">
                              <td><strong >SERIAL</strong></td>
                              <td><?php echo $_SESSION['serial']; ?></td>
                              <td><strong>TECHNICIAN</strong></td>
                          <td><?php echo $_SESSION['tech']; ?></td>
                            </tr>   
                            <tr class="info">
                          
      
    </tr>
    <tr class="info">
      <td><strong>SERVICE TYPE</strong></td>
      <td><?php echo $_SESSION['problem']; ?></td>
      <td><strong>COMMENT</strong></td>
      <td><?php echo $_SESSION['action']; ?></td>
    </tr>
    
    <tr class="success">
    <td><strong>JDN</strong></td>
      <td><?php echo $_SESSION['vin_no']; ?></td>
      <td><strong>PROCEED</strong></td>
      <td><a  href="cancel1.php?id=<?php echo $vin;?>&serial=<?php echo $serial; ?>"><button class="btn btn-success btn-mini" > <strong>CANCEL</strong></button></a></td>
      
    </tr>
    
  </tbody>

</table>
</div>