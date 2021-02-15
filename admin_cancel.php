<?php
session_start();
require 'auth.php';
include 'db.php';
require 'role.php';
$company=$_SESSION['company'];
$user=  $_SESSION['user'];
include 'header.php';
?>

<div class='container-fluid  mt-5 bg-white text-dark '>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class="row">
<p> THE SYSTEM WILL NOT ACCEPT UNDER PAYMENT OR PARTIAL PAYMENT</p>
                    
                        <div class="product-status-wrap">
                            <h4>RENEWAL TILL NUMBER 5367631 </h4>
                            
                            <div class="add-product m-2">
                                <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
                            </div>
                           
                                  <script>
                                $(document).ready(function(){

                                 load_data();

                                 function load_data(query)
                                 {
                                  $.ajax({
                                   url:"fetch4.php",
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
                                
                          
                            <table class="table table-sm table-striped" id="result">
                                

                                </tr>
                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
</div>