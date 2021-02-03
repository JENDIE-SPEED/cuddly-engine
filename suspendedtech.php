<?php

session_start();
require 'auth.php';
include 'db.php';
include 'headerconfig.php';


?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class='container  mt-5 bg-white text-dark'>

<div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <a target="_blank" href="pdf_ledger.php"><button type="button" class="btn btn-secondary mb-2">Export pdf</button></a>
                            <div class="add-product mb-3">
                                <input type="text" name="search_text" id="search_text" placeholder="Search by date or serial" class="form-control" />
                            </div>
                                                              <script>
                                $(document).ready(function(){

                                 load_data();

                                 function load_data(query)
                                 {
                                  $.ajax({
                                   url:"fetch6.php",
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
                                                          
                                 <table id="result" class="table table-striped">
                                

                                </tr>
                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
</div>