<?php
session_start();
require 'auth.php';
include 'db.php';
include 'header-director.php';
include 'graph.php';

?>
<!DOCTYPE html>
<html lang="en">
<head><title>Chart JS Sample</title>
<!-- Must have JQUERY -->
<script src="js/jquery.min.js"></script>
<!-- link to ChartJS cdn OR download latest chartjs.min.js from GitHub -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
</head>

<body>
<!-- this DIV will display the chart canvas -->
<div class="chart-container">
  <canvas id="bar-chartcanvas"></canvas>

</div>

<!-- javascript to run ChartJS with SQL data (JS to generate chart must come AFTER canvas HTML) -->
<script src="bar.js"></script>
</body>
</html>