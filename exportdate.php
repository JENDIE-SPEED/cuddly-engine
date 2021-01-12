<?php
include'header.php';
?>

<div class='container mr-5 mt-5 bg-white text-dark'>
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
                                                          
                                 <table id="result">
                                

                                </tr>
                            </table>
                           
                        </div>
                    </div>
</div>