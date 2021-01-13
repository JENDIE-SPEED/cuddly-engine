<?php
include'header.php';
?>

<div class='container mr-5 mt-5 bg-white text-dark'>
<form action="insertdealer.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      
      <input type="text" class="form-control mt-2" name="firstname" placeholder="First Name">
    </div>
    <div class="form-group col-md-6">
     
      <input type="text" class="form-control mt-2" name="lastname" placeholder="Last Name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      
      <input type="text" class="form-control" name="vat" placeholder="VAT">
    </div>
    <div class="form-group col-md-6">
     
      <input type="text" class="form-control" name="pin" placeholder="KRA Pin">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      
      <input type="text" class="form-control" name="business" placeholder="Business Registration No">
    </div>
    <div class="form-group col-md-6">
     
      <input type="text" class="form-control" name="adress" placeholder="Company Address">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      
      <input type="text" class="form-control" name="company" placeholder="Company Name">
    </div>
    <div class="form-group col-md-6">
     
      <input type="email" class="form-control" name="email"  placeholder="Email">
    </div>
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-4">
     
      <input type="text" class="form-control " name="number" placeholder="Phone">
    
    </div>
    <div class="form-group col-md-4">
     
      <select id="inputState" name="branch" class="form-control ">
      <option selected>Location</option>
  <option value = "ELDORET" style=";width: 150px;">ELDORET</option>
  <option value = "BUNGOMA" style=";width: 150px;">BUNGOMA</option>
                              <option value = "EMALI" style=";width: 150px;">EMALI</option>
                              <option value = "EMBU" style=";width: 150px;">EMBU</option>
                              <option value = "EMBU AND MERU" style=";width: 150px;">EMBU AND MERU</option>
                              <option value = "GARISSA" style=";width: 150px;">GARISSA</option>
                              <option value = "KAKAMEGA" style=";width: 150px;">KAKAMEGA</option>
                              <option value = "KERICHO" style=";width: 150px;">KERICHO</option>
                              <option value = "KIKUYU" style=";width: 150px;">KIKUYU</option>
                              <option value = "KIMILILI" style=";width: 150px;">KIMILILI</option>
                              <option value = "KISII" style=";width: 150px;">KISII</option>
                              <option value = "KISUMU" style=";width: 150px;">KISUMU</option>
                              <option value = "KITALE" style=";width: 150px;">KITALE</option>
                              <option value = "KITENGELA" style=";width: 150px;">KITENGELA</option>
                              <option value = "MACHAKOS" style=";width: 150px;">MACHAKOS</option>
                              <option value = "MALINDI" style=";width: 150px;">MALINDI</option>
                              <option value = "MERU" style=";width: 150px;">MERU</option>
                              <option value = "MOMBASA" style=";width: 150px;">MOMBASA</option>
                              <option value = "Nairobi" style=";width: 150px;">Nairobi</option>
                              <option value = "NAKURU" style=";width: 150px;">NAKURU</option>
                              <option value = "NANYUKI" style=";width: 150px;">NANYUKI</option>
                              <option value = "NYAHURURU" style=";width: 150px;">NYAHURURU</option>
                              <option value = "NYERI" style=";width: 150px;">NYERI</option>
                              <option value = "THIKA" style=";width: 150px;">THIKA</option>
        </select>
                         
    </div>
    <div class="form-group col-md-4">
      
    <input type="password" class="form-control  " name="password" placeholder="Password">
   
    </div>
    <button type="submit"  name="submit" class="btn btn-primary mb-2">Add</button>
</form>

</div>