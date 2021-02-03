<?php

session_start();
require 'auth.php';
include 'db.php';
include 'headerconfig.php';



$cus_name=mysqli_real_escape_string($conn, $_POST['cus_name']);
$contact=mysqli_real_escape_string($conn, $_POST['contact']);
$make=mysqli_real_escape_string($conn, $_POST['make']);
$model=mysqli_real_escape_string($conn, $_POST['model']);
$chasis=mysqli_real_escape_string($conn, $_POST['chasis']);
$reg = mysqli_real_escape_string($conn, $_POST['name']);
$tech = mysqli_real_escape_string($conn, $_POST['service']);
$serial=mysqli_real_escape_string($conn, $_POST['serial']);
$problem = mysqli_real_escape_string($conn, $_POST['problem']);
$action=mysqli_real_escape_string($conn,$_POST['message']);

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
$sql="SELECT * FROM alocate_serial WHERE `serial`='$serial';";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
$_SESSION['phone']=$row['phone'];
?>



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class='container  mt-5 bg-white text-dark'>
        <div class="container-table100">
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
      <td><strong>PROCEED</strong></td>
      <td><a target="_blank" href="insert.php"><button class="btn btn-success btn-mini" > <strong>PRINT</strong></button></a></td>
      <td><strong style="color:red;"> CANCEL</strong></td>
       <td><a href="index-1.php"><button >Back</button></a></td>
    </tr>
    
  </tbody>

</table>
                </div>
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
<!--===============================================================================================-->
    <script src="js/main.js"></script>  
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
<