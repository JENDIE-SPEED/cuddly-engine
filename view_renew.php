<?php
session_start();
include 'header.php';
include 'auth.php';
include 'db.php';
$company=$_SESSION['company'];
$user=  $_SESSION['user'];
    $id=$_GET['id'];
    $sql="SELECT * FROM `work` WHERE vin_no='$id'";
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
                              <td><?php $serial=$row['serial']; echo $row['serial']; ?></td>
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
    <tr class="info">
      
    </tr>
    <tr class="success">
      <td><strong>print</strong></td>
      <td><a  href="batch.php?q=<?php echo $serial; ?>"><button class="btn btn-success btn-mini" > <strong>RENEW</strong></button></a></td>
      
    </tr>
  </tbody>

</table>
                </div>
            </div>
        </div>
    </div>
   
