<?php
include'header.php';
?>

<div class='container mr-5 mt-5 bg-white text-dark'>
<div class="row">
                    <div class="col-lg-6">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
							<form method="post" action="export_renew.php">
							<table width="100%">
							<tr>
							<td>
							<label>From</label>
							<input type="date" name="from_date"  class="form-control col-md-6 text-white bg-default"></td>
							<td>
							<label>To</label>
							<input type="date" name="to_date"  class="form-control col-md-6 text-white bg-default"></td>
                            <td>
							<input type="submit" class="btn btn-warning" name="export" value="Export"></td>
							</tr>
							</form>
                            <div class="add-product">
                                <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control " />
                            </div>
                                                              <script>
                                $(document).ready(function(){

                                 load_data();

                                 function load_data(query)
                                 {
                                  $.ajax({
                                   url:"fetch_renew.php",
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
                                                          
                                 <table id="result">
                                

                                </tr>
                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
</div>