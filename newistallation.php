<?php
include 'header.php';
include 'db.php';
?>
<div class="container mt-5 mr-5" style="background-color:white;">
<form  method="post" action="precert.php">
  <div class="form-row p-1">
    <div class="form-group col-md-6">
     
    <input type="text" class="form-control" placeholder="Name" id="name">
    </div>
    <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Contact" id="contact">
      </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      
    <input type="text" class="form-control" placeholder="Registration" id="regis">
    </div>
    <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Chasis" id="chasis">
    </div>
  </div>
  
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Make" id="make">
    </div>
    <div class="form-group col-md-4">
    <?php

    
      
    $result = mysqli_query($conn, "SELECT `serial` FROM `alocate_serial`  ");
    echo "<select   class='form-control'  >";
    echo"<option > Search Serial </option>";
    while ($row = mysqli_fetch_array($result))

    {  $outserial=json_encode($row[serial]);
    
      echo "<option id='serial'> $outserial </option>";
    }



    echo "</select>";

    ?>
      
    </div>
    <div class="form-group col-md-2">
      
    <input type="text" class="form-control" placeholder="Comment" id="model">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Model" id="ins">
    </div>
    <div class="form-group col-md-4">
     
    
      <?php

    
   
      $result = mysqli_query($conn, "SELECT `first_name` FROM `technician`  ");
      echo "<select  class='form-control' >";
      echo"<option > Technician </option>";
      while ($row = mysqli_fetch_array($result))
      {
        echo "<option id='tech' > $row[first_name] </option>";
      }



      echo "</select>";

      ?>

    </div>
    <div class="form-group col-md-2">
    <input type="text" class="form-control"  value="New Installation">
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

