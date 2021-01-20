<?php

session_start();
require 'auth.php';
include 'db.php';
$role=$_SESSION['role'];
if ($role==='dealers') {
  # code...
include 'dealerheader.php';
}
elseif ($role==='user'){
  # code...
  include 'userheader.php';
}
else {
  include 'header.php';
};


?>

<div class='containermt-5 mt-5bg-white text-dark'>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>RENEWAL TILL NUMBER 5367631 </h4>
                            <a href="export.php"><button type="button" class="btn btn-primary mb-1">excel</button></a>
                            <div class="add-product">
                                <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control mb-2" />
                            </div>
<table class="table table-hover table-bordered table-sm" id="result" style="background-color:white;">
<thead>
  <tr>
    <th>Unique ID</th>
    <th>Vehicle</th>
    <th>Service</th>
    <th>Technician</th>
    <th>Dealer</th><br>
    <th>Comment</th>
    <th>Inst<br>Date</th>
    <th>User</th>
    <th>GVN SIM</th>
    <th>Cancel</th>
    <th>Edit</th>
    <th>Renewal</th>
  </tr>
  </thead>
  <tbody >
  
  </tbody>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

$(document).ready(function(){

load_data();

function load_data(query)
{
 $.ajax({
  url:"fetch.php",
  method:"POST",
  data:{query:query},
  success:function(data)
  {
   $('#result').html(data);
  }
  
 });
 
}

$('#search_text').keyup(function(){
 var search = $(this).val();
 if(search != '')
 {
  load_data(search);
 }
 else
 {
  load_data();
 }
});
});




  </script>
