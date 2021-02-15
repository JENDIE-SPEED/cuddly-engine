<?php

session_start();
require 'auth.php';
include 'db.php';
include 'headerconfig.php'


?>
<div class="container mt-5 " style="background-color:white;">
<form  method="post" action="precert.php">
  <div class="form-row p-1">
    <div class="form-group col-md-6">
     
    <input type="text" class="form-control" placeholder="Name" name="cus_name" id="name" required>
    </div>
    <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Contact" name="contact" id="contact" required>
      </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      
    <input type="text" class="form-control" placeholder="Registration"  name="name" id="regis" required>
    </div>
    <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Chasis" name="chasis" id="chasis" required>
    </div>
  </div>
  
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Make" name="make" id="make">
    </div>
    <div class="form-group col-md-4 ">

    <?php
    echo "<input id='serial' list='serial1' placeholder='Search Serial' class='form-control' name='serial' required >
    <datalist id='serial1'>";
    //$sql="SELECT serial FROM alocate_serial";
    $sql="SELECT * from `alocate_serial` WHERE `alocate`=1 and sold=0 and dealer='$company' order by `serial` ASC";
    foreach($conn->query($sql) as $row){
      echo "<option value='$row[serial]'/>";
    } 
    echo "</datalist>";
   

      ?>
    
    </div>  
   
    <div class="form-group col-md-2">
      
    <input type="text" class="form-control" placeholder="Comment" name='message'  id="comment">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Model" name="model" id="ins">
    </div>
    <div class="form-group col-md-4">
     
    
      
      <?php
    echo "<input id='tech' list='tech1' placeholder='Search Technician' class='form-control'  name='service' required>
    <datalist id='tech1'>";
    $sql="SELECT `first_name` FROM `technician` ";
    foreach($conn->query($sql) as $row){
      echo "<option value='$row[first_name]'/>";
    } 
    echo "</datalist>";
   

      ?>
    

    </div>
    <div class="form-group col-md-2">
    <input type="text" class="form-control" name="problem" value="New Installation">
    </div>
  </div>
  
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Verify
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-dialog-centered">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Confirm that's the right information
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Edit</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
 
</form>

</div>
