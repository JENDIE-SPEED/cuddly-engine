<?php
session_start();
require 'auth.php';
include 'db.php';
$company=$_SESSION['company'];
$date=date('Y-m-d');
$date1=date('Y-m-d');

$output = '';

$newdate = date ( 'Y-m-d' );
echo $newdate;
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
   SELECT * from work WHERE dealer='$company' and `date`< '$newdate' OR vin_no LIKE '%".$search."%' OR reg_no LIKE '%".$search."%' OR cus_name LIKE '%".$search."%' OR serial LIKE '%".$search."%' limit 10";
}
else
{
 $query = "
  SELECT * from work WHERE dealer='$company'  ORDER BY id DESC LIMIT 10
 ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0 )
{
 $output .= '
                                    <tr>
                                    <th>UNIQUE ID</th>
                                    <th>VEHICLE</th>
                                    <th>SERVICE</th> 
                                    <th>TECHNICAN</th>
                                    <th>DEALER</th>
                                    <th>COMMENT</th>
                                    <th>INST DATE</th>
                                    <th>USER</th>
                                    <th>GVN SIM </th>
                                    
                                    <th>RENEWAL</th>
                                    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $vin=$row['vin_no'];
  $serial=$row['serial'];
  $date=$row['date'];
  
  $output .= '
   <tr>
    <td><a href="view_renew.php?id='.$vin.'">'.$row['vin_no'].'</a></td>
    <td> '.$row['reg_no'].'</td>    
    <td>'.$row['problem'].'</td>
    <td>'.$row['tech'].'</td>
    <td>'.$row['dealer'].'</td>
    <td>'.$row['action'].'</td>
    <td>'.$row['date'].'</td>
    <td>'.$row['user'].'</td>
   <td>'.$row['phone'].'</td>
   
   <td><a href="batch.php?q='.$serial.'"><button class="btn btn-primary btn-sm">RENEW</button></a></td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>