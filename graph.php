<?php

//declare variables for db connection
include 'db.php';
//db connection


$date=date("Y/m/d") ;
//sql statement to run
$sql="SELECT * FROM work where problem='INSTALLATION' and `date`='$date' ";

//run sql query and store into variable
$result = mysqli_query($conn,$sql);
$data = array();

foreach ($result as $row) {
 $data[] = $row;
}

//free memory and close db connection
$result->close();
$conn->close();

// IMPORTANT, output to json
echo json_encode($data);

?>