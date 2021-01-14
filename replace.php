<?php
include 'header.php';
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class='container mr-5 mt-5 bg-white text-dark'>
<a href="export.php"><button type="button" class="btn btn-secondary mb-3 mt-2">excel</button></a>

                            <div class="add-product">
                                <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control mb-2" />
                            </div>
                                                              <script>
                                $(document).ready(function(){

                                 load_data();

                                 function load_data(query)
                                 {
                                  $.ajax({
                                   url:"fetch8.php",
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
                                                          
                                 <table id="result" class="table table-bordered">
                                

                                </tr>
                            </table>
                           
                        </div>
                    </div>
                </div>
</div>