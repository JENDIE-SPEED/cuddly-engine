<?php
include'header.php';
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class='container  mt-5 bg-white text-dark'>
<form action="technician.php" method="post">
  <div class="form-row">
    <div class="col-5 mt-1 ">
      <input type="text" class="form-control" name="firstname" placeholder="First name">
    </div>
    <div class="col mt-1" >
      <input type="text" class="form-control" name="lastname" placeholder="Last name">
    </div>
    <div class="col mt-1">
      <input type="text" class="form-control"  name="idno" placeholder="ID">
    </div>
    <div class="col mt-1">
      <input type="text" class="form-control" name="phone" placeholder="Phone">
    </div>
  </div>
  <select class="custom-select mt-1 mb-1" name="branch">
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
                              <option value = "THIKA/MANDERA/GARISSA" style=";width: 150px;">THIKA/MANDERA/GARISSA</option>
                              <option value = "VOI" style=";width: 150px;">VOI</option>
</select>
  <button type="submit" name="submit" class="btn btn-primary mb-2 mt-1">Add</button>
</form>


</div>