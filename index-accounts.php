<?php

session_start();
require 'auth.php';
include 'db.php';
$role=$_SESSION['role'];
$company=$_SESSION['company'];

if($role==='super admin') {
  include 'headeraccount1.php';
}
elseif($role==='accounts') {
    include 'headeraccount.php';
  }
else{
  echo'invalid!';
}


?>

<div class='container-fluid mt-5'>

<div class="card-deck m-2 ml-5">
<!--prog1-->
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header text-light bg-dark" border-success">Daily Installations</div>
  <div class="card-body text-white "style="background-color:rgb(41, 37, 36);opacity:0.8;">
    
    <p class="card-text"><h1>
    <?php
                                         $date=date('Y-m-d'); 
                                         if ($company==='JENDIE') {
                                             # code...
                                            $date=date('Y-m-d');
                                        $sql="SELECT * FROM work where problem='INSTALLATION' and `date`='$date' ";
                                        $query=mysqli_query($conn,$sql);
                                        $count=mysqli_num_rows($query);
                                        ?>
                                        <h3><span class="counter"><?php echo $count; ?></span></h3>
                                        <?php
                                         } else {
                                             # code...
                                            $date=date('Y-m-d');
                                        $sql="SELECT * FROM work where problem='INSTALLATION' and `date`='$date' and dealer='$company'";
                                        $query=mysqli_query($conn,$sql);
                                        $count=mysqli_num_rows($query);
                                        ?>
                                        <h3><span class="counter"><?php echo $count; ?></span></h3>
                                        <?php
                                         }
                                         
                                        ?>
    </h1></p>
  </div>
  <div class="card-footer bg-transparent border-success"><a target="_blank" href="daily_reports.php"><button class="btn btn-primary">PDF</button></a></div>
</div>

<!--prog2-->
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header text-light bg-dark" border-success">Daily Renewals</div>
  <div class="card-body text-white "style="background-color:rgb(41, 37, 36);opacity:0.8;">
    
    <p class="card-text"><h1>
    <?php 
                                        if ($company==='JENDIE') {
                                             # code...
                                            $date=date('Y-m-d');
                                        $sql="SELECT * FROM work where problem='renewal' and `date`='$date'";
                                        $query=mysqli_query($conn,$sql);
                                        $count=mysqli_num_rows($query);
                                        ?>
                                         <h3><span></span><span class="counter"> <?php echo $count ;?></span></h3>
                                         <?php
                                         } else {
                                             # code...
                                            $date=date('Y-m-d');
                                        $sql="SELECT * FROM work where problem='renewal' and `date`='$date' and dealer='$company'";
                                        $query=mysqli_query($conn,$sql);
                                        $count=mysqli_num_rows($query);
                                            ?>
                                             <h3><span></span><span class="counter"> <?php echo $count ;?></span></h3>
                                             <?php
                                         }
                                        
                                        ?>
                                       
    </h1></p>
  </div>
  <div class="card-footer bg-transparent border-success"><a target="_blank" href="daily_renewals.php"><button class="btn btn-primary">PDF</button></a></div>
</div>
<!--prog3-->
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header text-light bg-dark" border-success">Weekly Installations</div>
  <div class="card-body text-white "style="background-color:rgb(41, 37, 36);opacity:0.8;">
    
    <p class="card-text"><h1>
    <?php
                                    if ($company==='JENDIE') {
                                             # code...
                                        $newdate = strtotime ( '-7 day' , strtotime ( $date ) ) ;
                                       $newdate = date ( 'Y-m-d' , $newdate ); 
                                      
                                    $sql="SELECT * from work where problem='INSTALLATION' and `date` BETWEEN '$newdate' and '$date';";
                                     $query=mysqli_query($conn,$sql);
                                     echo $count=mysqli_num_rows($query);
                                         } else {
                                             # code...
                                             $newdate = strtotime ( '-7 day' , strtotime ( $date ) ) ;
                                       $newdate = date ( 'Y-m-d' , $newdate ); 
                                    
                                    $sql="SELECT * from work where problem='INSTALLATION' and dealer='$company' and `date` BETWEEN '$newdate' and '$date' ;";
                                     $query=mysqli_query($conn,$sql);
                                     echo $count=mysqli_num_rows($query);
                                         }

                                    ?>
    </h1></p>
  </div>
  <div class="card-footer bg-transparent border-success"><a target="_blank" href="weekly_report.php"><button class="btn btn-primary">PDF</button></a></div>
</div>

</div>

<!--cardrow2-->

<div class="card-deck m-2 ml-5">
<!--prog1-->
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header text-light bg-dark" border-success">Weekly Renewals</div>
  <div class="card-body text-white "style="background-color:rgb(41, 37, 36);opacity:0.8;">
    
    <p class="card-text"><h1>
    <?php
                                    if ($company==='JENDIE') {
                                             # code...
                                        $newdate = strtotime ( '-7 day' , strtotime ( $date ) ) ;
                                       $newdate = date ( 'Y-m-d' , $newdate ); 
                                      
                                    $sql="SELECT * from work where problem='RENEWAL' and `date` BETWEEN '$newdate' and '$date';";
                                     $query=mysqli_query($conn,$sql);
                                     echo $count=mysqli_num_rows($query);
                                         } else {
                                             # code...
                                             $newdate = strtotime ( '-7 day' , strtotime ( $date ) ) ;
                                       $newdate = date ( 'Y-m-d' , $newdate ); 
                                    
                                    $sql="SELECT * from work where problem='RENEWAL' and dealer='$company' and `date` BETWEEN '$newdate' and '$date' ;";
                                     $query=mysqli_query($conn,$sql);
                                     echo $count=mysqli_num_rows($query);
                                         }

                                    ?>
    </h1></p>
  </div>
  <div class="card-footer bg-transparent border-success"><a target="_blank" href="week-renewals.php"><button class="btn btn-primary">PDF</button></a></div>
</div>


<!--prog2-->
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header text-light bg-dark" border-success">Monthly Installations</div>
  <div class="card-body text-white "style="background-color:rgb(41, 37, 36);opacity:0.8;">
    
    <p class="card-text"><h1>
    <h2><span class="counter"><?php
                                if ($company==='JENDIE') {
                                             # code...
                                    $newdate = date ( 'm-Y'); 
                                    $newdate1='1-'.$newdate;
                                      
                                    $sql="SELECT * from work where problem='INSTALLATION' and `date` BETWEEN '$newdate1' and '$date';";
                                     $query=mysqli_query($conn,$sql);
                                      echo $count=mysqli_num_rows($query);
                                         } else {
                                             # code...
                                            $newdate = date ( 'm-Y'); 
                                        $newdate1='1-'.$newdate;
                                       
                                    $sql="SELECT * from work where problem='INSTALLATION' and dealer='$company' and `date` BETWEEN '$newdate1' and '$date'  ;";
                                     $query=mysqli_query($conn,$sql);
                                      echo $count=mysqli_num_rows($query);
                                         }
                                       
                                     ?>
    </h1></p>
  </div>
  <div class="card-footer bg-transparent border-success"><a target="_blank" href="monthly_report.php"><button class="btn btn-primary">Monthly Report</button></a></div>
</div>


<!--prog3-->
<div class="card border-success mb-3" style="max-width: 18rem;">
  <div class="card-header text-light bg-dark" border-success">Weekly Renewals</div>
  <div class="card-body text-white "style="background-color:rgb(41, 37, 36);opacity:0.8;">
    
    <p class="card-text"><h1>
    <?php
                                if ($company==='JENDIE') {
                                             # code...
                                    $newdate = date ( 'm-Y'); 
                                    $newdate1='1-'.$newdate;
                                      
                                    $sql="SELECT * from work where problem='RENEWAL' and `date` BETWEEN '$newdate1' and '$date';";
                                     $query=mysqli_query($conn,$sql);
                                      echo $count=mysqli_num_rows($query);
                                         } else {
                                             # code...
                                            $newdate = date ( 'm-Y'); 
                                        $newdate1='1-'.$newdate;
                                       
                                    $sql="SELECT * from work where problem='RENEWAL' and dealer='$company' and `date` BETWEEN '$newdate1' and '$date'  ;";
                                     $query=mysqli_query($conn,$sql);
                                      echo $count=mysqli_num_rows($query);
                                         }
                                       
                                     ?>
    </h1></p>
  </div>
  <div class="card-footer bg-transparent border-success"><a target="_blank" href="monthly_renewals.php"><button class="btn btn-primary">Monthly Report</button></a></div>
</div>
</div>

</div>









 




</div>