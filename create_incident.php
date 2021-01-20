<?php
include 'header.php';
session_start();
require 'db.php';
$company=$_SESSION['company'];
$user=  $_SESSION['user'];
    $id=$_GET['id'];
    $sql="SELECT * FROM `work` WHERE vin_no='$id'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
?>


<div class='container mt-5 bg-white text-dark'>
  <div class="table100-body js-pscroll">
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                                <form method="post" action="insert_incident.php">
                            <tr class="info">
                          <td><strong >REGISTRATION</strong></td>
                          <td><?php echo $row['reg_no']; ?></td>
                           <td><strong >CHASIS</strong></td>
                          <td><?php echo $row['chasis']; ?></td>
                          
                            </tr> 
                           
                             <tr class="info">
                          <td > <strong  >MAKE</strong></td>
                          <td><?php echo $row['make']; ?></td>
                          <td><strong >MODEL</strong></td>
                          <td><?php echo $row['model']; ?></td>
                            </tr> 
                            <tr class="info">
                              <td><strong >SERIAL</strong></td>
                              <td><?php echo $row['serial']; ?></td>
                               <td><strong>COMMENT</strong></td>
                               <td><?php echo $row['action']; ?></td>
                            </tr>   
      
    <tr class="info">
      <td ><strong  >COMMENTS</strong></td>
      <td><textarea  name="comments" required></textarea></td>
     <td><strong>INCIDENT</strong></td>
      <td><select name="incident" required>
        <option></option>
          <option value="Accident">Accident</option>
          <option value="Complain">Complain</option>
          <option value="Others">Other</option>
      </select></td>
    </tr>
    
    <tr class="success">
      <td><strong>submit</strong></td>
      <td>
        <?php
        $_SESSION['reg']=$row['reg_no'];
        $_SESSION['vin']=$row['vin_no'];
        $_SESSION['tech']=$row['tech'];
        $_SESSION['dealer']=$row['dealer'];
        ?>
   <button  type="submit" class="btn btn-success btn-mini">SAVE </button></td>
      
    </tr>
    </form>
  </tbody>

</table>
                </div>
            </div>
        </div>
    </div>
   
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2019 | All rights reserved.</p>
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
