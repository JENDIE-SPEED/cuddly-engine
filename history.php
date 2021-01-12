<?php
include 'header.php';
?>
<div class="container mt-5 mr-5" style="background-color:white;">
<div class="table-responsive">
<table class="table table-hover table-bordered " id="result">
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
