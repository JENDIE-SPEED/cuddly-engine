
<?php
include 'header.php';
session_start();
include 'auth.php';
include 'db.php';
$company=$_SESSION['company'];
$user=  $_SESSION['user'];
    $id=$_GET['id'];
    $sql="SELECT * FROM `work` WHERE vin_no='$id'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
?>

<div class="container mt-5 mr-5" style="background-color:white;">

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
    <tr class="info">
      
    </tr>
    <tr class="success">
      <td><strong>print</strong></td>
      <td><a target="_blank" href="reprint.php?id=<?php echo $id; ?>"><button class="btn btn-success btn-mini" > <strong>PRINT</strong></button></a></td>
      
    </tr>
  </tbody>

</table>
                </div>
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

