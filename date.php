
<?php
include 'db.php';

$startdate=$_POST['startdate'];
$enddate=$_POST['enddate'];

$sql="SELECT * FROM work WHERE `date`
       BETWEEN '$startdate' AND '$enddate'";
$result=mysqli_query($conn,$sql);




?>