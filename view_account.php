<?php
session_start();
include 'header.php';
require 'auth.php';
include 'db.php';
$company=$_SESSION['company'];
$user=  $_SESSION['user'];
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class='container mr-5 mt-5 bg-white text-dark'>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <a href="export.php"><button class="btn btn-primary mb-1">excel</button></a>
                            <div class="add-product">
                                <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control mb-2" />
                            </div>
                            <?php
                            $role=$_SESSION['role'];
                             if ($role==='admin' ) {
                                 # code...
                                ?>
                                  <script>
                                $(document).ready(function(){

                                 load_data();

                                 function load_data(query)
                                 {
                                  $.ajax({
                                   url:"view_account_main.php",
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
                                <?
                             } else {
                                 # code...

                                ?>
                                  <script>
                                $(document).ready(function(){

                                 load_data();

                                 function load_data(query)
                                 {
                                  $.ajax({
                                   url:"view_account_dealer.php",
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
                                <?
                             }
                             
                            ?>
                          
                                 <table id="result" class="table table-striped">
                                

                                </tr>
                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
       