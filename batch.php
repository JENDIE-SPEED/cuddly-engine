
<?php

session_start();
include 'header.php';
include 'auth.php';
include 'db.php';
$company=$_SESSION['company'];
$user=  $_SESSION['user'];
    $id=$_GET['serial'];;
    $_SESSION['serial']=$id;
    $sql="SELECT * FROM `work` WHERE `serial`='$id'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
?>
<div class='container mr-5 mt-5 bg-white text-dark'>

<form>
			<label>Mpesa Code </label>
			<input type="text" name="mpesa" id="mpesa" class="form-control form-control" placeholder="Enter Mpesa Code" required>
			<br>
			<div class="clearfix">
			<a id="search1" class="float-right btn btn-primary" onclick="showVehicle()"><i class="fa fa-search"></i></a>
			<input type="text" name="search" id="search" class="form-control form-control col-sm-4 float-right" placeholder="Search Vehicle" value="<?php if(isset($_GET['q'])){ echo $_GET['q']; } ?>" data-toggle="tooltip" title="Hit Enter Keyboard Key to Search" required>
			
			</div>
			<br>
			</form>
			<br>
			<table id="lipampesa" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Serial Number</th>
                <th>Registration Number</th>
				<th>Certificate Number</th>
                <th>Dealer</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
		<?php
		# code...
		if(isset($_GET['q'])){
			$q = $_GET['q'];
			$sql="SELECT * from `work` where  reg_no LIKE '%".$q."%' OR serial LIKE '%".$q."%' AND problem='INSTALLATION' limit 10 ";
		}else{
			$sql="SELECT * from `work` where problem='INSTALLATION' limit 100 ";
		}
                                $result=mysqli_query($conn,$sql);
                                while ($row=mysqli_fetch_array($result)) {
                                    $name=$row['serial'];
                                    ?>
                                    
									<tr id="datarow">
										<td><?php echo $row['id']; ?></td>
										<td><?php echo $row['serial']; ?></td>
										<td><?php echo $row['reg_no']; ?></td>
										<td><?php echo $row['vin_no']; ?></td>
										<td><?php echo $row['dealer']; ?></td>
										<td><?php echo $row['date']; ?></td>
										<td class="btn btn-primary btn-sm">Click to Renew</td>
									</tr>
									<?php
                                }
     
          # code...
       
      
      
                            ?>
            
			</tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>Serial Number</th>
                <th>RegistrationNumber</th>
				<th>Certificate Number</th>
                <th>Dealer</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
                
   <br />
  </div>
  <script>
  $(window).on('load', function () {
    $('#loading').hide();
  });
</script>
 </body>
</html>



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
function showVehicle(str) {
  if (str=="") {
    //document.getElementById("txtHint").innerHTML="";
    return;
  }
  //alert("Hello");
  var input = document.getElementById("search");

	// Execute a function when the user releases a key on the keyboard
	input.addEventListener("keyup", function(event) {
	  // Number 13 is the "Enter" key on the keyboard
	  if (event.keyCode === 13) {
		window.location.href = 'batch.php?q='+str;	
  }
});
  
}

function showVehicle() {
  var str = document.getElementById("search").value;
  if (str=="") {
    return;
  }
  window.location.href = 'batch.php?q='+str;
}

$(document).ready(function(){
 $('#framework').multiselect({
  nonSelectedText: 'Select Reg',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 
  });
$(document).ready(function(){
 $('#framework1').multiselect({
  nonSelectedText: 'Select Client',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 
  });
  
  $(document).ready(function() {
    $('#lipampesa').DataTable();
} );

function addRowHandlers() {
  var table = document.getElementById("lipampesa");
  var rows = table.getElementsByTagName("tr");
  for (i = 0; i < rows.length; i++) {
    var currentRow = table.rows[i];
	
	//console.log(currentRow);
    var createClickHandler = function(row) {
      return function() {
        var cell = row.getElementsByTagName("td")[1];
        var serial = cell.innerHTML;
		var cell = row.getElementsByTagName("td")[2];
        var reg = cell.innerHTML;
		var cell = row.getElementsByTagName("td")[3];
        var cert = cell.innerHTML;
		
		var mpesacode = document.getElementById("mpesa").value;
		if(mpesacode == ""){
			alert("Enter Mpesa Code");
			return false;
		}
		//window.location.href = "batch-install.php?framework="+serial+"&mpesa="+mpesacode;
		if (confirm("Confirm you want to renew "+reg)) {
		$(window).on('load', function () {
			$('#loading').show();
		  });
		$.ajax({
            type: "POST",
            url: "batch-install.php",
            //dataType: "json",
            data: {framework:serial, mpesa:mpesacode},
            success : function(data){
				alert(data);
				if(data == "success"){
					//var index = table.row( this ).index();
					//alert(index);
					//document.getElementById("datarow").deleteRow(index);
					window.open("reprint.php?id="+cert);
					
				}
				//alert(data);
            }
        });
		}else{
			return false;
		}
      };
    };
    currentRow.onclick = createClickHandler(currentRow);
  }
}
window.onload = addRowHandlers();

</script>

</div>