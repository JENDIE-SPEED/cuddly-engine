<?php

session_start();
require 'auth.php';
include 'db.php';

$company=$_SESSION['company'];
$user=  $_SESSION['user'];
include 'headerconfig.php';

?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class='container-fluid mt-5 bg-white text-dark'>
<div class="row">
                   
                        <div class="product-status-wrap">
                            <h4>RENEWAL TILL NUMBER 5367631 </h4>
                            <a href="export.php"><button class="btn btn-primary m-1">excel</button></a>
                            <div class="add-product">
                                <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
                            </div>
                            <?php
                            if ($company=='JENDIE') {
                                # code...
                                ?>
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
                                <?php
                            } else {
                                ?>
                                <script>
                                $(document).ready(function(){

                                 load_data();

                                 function load_data(query)
                                 {
                                  $.ajax({
                                   url:"fetch_dealer.php",
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
                                <?php
                            }
                            
                           
                                  ?>
                                
                          
                                 <table class="table table-dark" id="result">
                                

                                </tr>
                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>