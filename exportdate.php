<?php

session_start();
require 'auth.php';
include 'db.php';
include 'headerconfig.php';


?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class='container  mt-5 bg-white text-dark'>
<form>
  <div class="row">
    <div class="col">
    <label for="d1">Start Date</label>
      <input type="date" class="form-control m-1" id="d1" >
    </div>
    <div class="col">
    <label for="d2">End Date</label>
      <input type="date" class="form-control m-1" id="d2">
    </div>
  </div>
  <input type="submit" name="submit" class="btn btn-primary">

  
</form>

                            <div class="add-product">
                                <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control m-2" />
                            </div>
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
                                                          
                                 <table id="result" class="table table-sm table-striped bg-white">
                                

                                </tr>
                            </table>
                           
                        </div>
                    </div>
</div>