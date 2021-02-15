<?php 

include 'db.php';

$email=$_SESSION['user'];


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jendie</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


<!-- Font Awesome JS -->
 <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
 <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="sidebar.css" rel="stylesheet">

</head>
<style>
    body{
      background-image: linear-gradient(to right, rgba(237, 193, 118), rgba(195, 161, 151));
      
  max-width: 100%;
  overflow-x: hidden;

  }
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" style="background-color:rgb(41, 37, 36);opacity:0.8;">
    <div class="sidebar-heading"><?php  $name=$_SESSION['last'];
                                echo $name;?> </div>
     
      
      <div class="sidebar-sticky pt-3">
        <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="index-accounts.php"> <img src="assets/img/JEND.png"></a>
        <ul class="nav flex-column">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light bg-dark" data-toggle="dropdown" ><i class="fas fa-home " aria-hidden="true"></i><span class="ml-1"></span>Main</a>
            <div class="dropdown-menu">
              
            <a class="dropdown-item" href="defaulters.php">Defaulters</a>
              <a class="dropdown-item" href="historyaccounts.php">History</a>
              <a class="dropdown-item" href="rprizes.php">Renewal Prizes</a>
              <a class="dropdown-item" href="accountstrans.php">Transaction</a>
              <a class="dropdown-item" href="invoicehis.php">Invoice History</a>
              <a class="dropdown-item" href="installationinvoice.php">New Installation Invoice</a>
             
              <a class="dropdown-item" href="renewalinvoice.php">Renewal Invoice</a>
              <a class="dropdown-item" href="valves.php">Valves Invoice</a>
            
            
          </li>
         
         
          <li class="nav-item ">
              <a class="nav-link text-light bg-dark " href="exportreport.php" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i><span class="ml-1"></span>Export Reports</a>
             
            </li>
         

              
               
        </ul>

        </ul>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

       <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <div class="profile-dtl">
        <button class="btn btn-primary" id="menu-toggle">  <span class="navbar-toggler-icon"></span></button>
       
          
                </div>

  
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" href="index01.php"  >Home</a>
    <div class="dropdown show">
    <a class="nav-item nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown"  href="#nav-profile" >Switch </a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="index01.php">Certificates</a>
   
   
  </div>
  </div>

    <a class="nav-item nav-link" id="nav-contact-tab" href="logout.php" >Logout</a>
  </div>
</nav>

      <div class="container-fluid">
        
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src=jquery.slim.min.js"><\/script>')</script><script src="bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>