<?php
session_start();
include 'header.php';
require 'db.php';
$company=$_SESSION['company'];
    $id=$_GET['id'];
    $_SESSION['vin']=$id;
    $sql="SELECT * FROM `work` WHERE vin_no='$id'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class='container mr-5 mt-5 bg-white text-dark'>


                <div class="table100 ver1 m-b-110">
                    <div class="table100-head">
                        <table>
           
</table>
</div>
  
  <div class="table100-body js-pscroll">
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                                <form method="post" action="serial_replace.php"> 
                                <tr class="info">

                                    <?php 
                                    if ($company==='JENDIE') {
                                        # code...
                                        ?>
                                        <td><strong >NAME</strong></td>
                          <td><?php echo $row['cus_name']; ?></td>
                          <td><strong >CONTACT</strong></td>
                          <td><?php echo $row['contact']; ?></td>
                                        <?php
                                    }
                                    ?>
                          
                          
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
      <td><strong>SERVICE TYPE</strong></td>
      <td><?php echo $row['problem']; ?></td>
      <td><strong>COMMENT</strong></td>
      <td><?php echo $row['action']; ?></td>
    </tr>
                             <tr class="info">
                          
                          
                            </tr>   

                            <tr class="info">
                              <td><strong >SERIAL</strong></td>
                              <td><select name="serial" required ><?php
                                    $sql="SELECT * from `alocate_serial` WHERE `alocate`=1 and sold=0 and dealer='$company' order by `serial` ASC";
                                    $result=mysqli_query($conn,$sql);
                                    while ($row=mysqli_fetch_array($result)) {
                                        $serial=$row['serial'];
                                        ?>
                                       <option value="<?php echo $serial; ?>"><?php echo $row['serial']; ?></option>
                                       <?php
                                   }
                                       ?></select></td>
                              <td><strong>TECHNICIAN</strong></td>
                          <td><select name="service" required/>
        
                            
                            <?php
                            $sql="SELECT * from `technician` where dealer='$company'";
                                $result=mysqli_query($conn,$sql);
                                while ($row=mysqli_fetch_array($result)) {
                                    $name=$row['first_name']." ".$row['second_name'];
                                    ?>
                                    <option value="<?php echo $name ?>" ><?php echo $row['first_name']." ".$row['second_name']; ?></option>
                                    <?
                                }?>
      </select></td>
                            </tr>   
                           
    
    <tr class="info">
      
    </tr>
    <tr class="success">
      <td><strong>print</strong></td>
      <td><button class="btn btn-success btn-mini" > <strong>PRINT</strong></button></td>
      
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
