<?php

session_start();
require 'auth.php';
include 'db.php';
$role=$_SESSION['role'];
if ($role==='dealers') {
  # code...
include 'dealerheader.php';
}
elseif ($role==='user'){
  # code...
  include 'userheader.php';
}
else {
  include 'header.php';
};


?>

<script src="https://use.fontawesome.com/40c901b2cc.js"></script>
<div class='container mt-5 bg-white text-dark'>
<div class="row">
                    <div class="col-lg-12 ">
                        <div class="product-status-wrap">
                            <h4>dealer List</h4>
                            <div class="add-product">
                                <a href="adddealer.php">Add Dealers</a>
                            </div>
                            <table class="table table-bordered">
                                <tr>
                                    
                                    
                                    <th>DELEAR</th>
                                    <th>UNITS</th>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>AURUM STAR</td>
                                    <td>
                                        5                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>AUTOMOBILE SPEEDTRACK</td>
                                    <td>
                                        3                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>BATESI </td>
                                    <td>
                                        7                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>BESTRICH TECHNOLOGY</td>
                                    <td>
                                        12                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>BONIFACE&QUEENS</td>
                                    <td>
                                        11                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>BONOTI AUTO</td>
                                    <td>
                                        6                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>BUJULTD</td>
                                    <td>
                                        9                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>BUNGOMALINE SACCO</td>
                                    <td>
                                        1                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>CLEOKIM LTD</td>
                                    <td>
                                        2                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>DIGITAL ELECTRICALS</td>
                                    <td>
                                        14                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>DIGITAL TELEMATICS</td>
                                    <td>
                                        3                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>ELIGIBLE</td>
                                    <td>
                                        1                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>ELISAMWA ENTERPRISE </td>
                                    <td>
                                        1                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>ENGINE ROOM TECH LTD</td>
                                    <td>
                                        5                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>EXTRATECH AUTOMOTIVE SOLUTIONS</td>
                                    <td>
                                        1                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>FIATMART</td>
                                    <td>
                                        3                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>HENJIK</td>
                                    <td>
                                        48                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>IZIT AUTO SERVICES</td>
                                    <td>
                                        3                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>JENDIE</td>
                                    <td>
                                        916                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>JENDIE AUTO BUNGOMA</td>
                                    <td>
                                        2                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>JENDIE GARISSA</td>
                                    <td>
                                        1                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>JERIMAX AUTOWORKS NAKURU</td>
                                    <td>
                                        49                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>JOSHPETER</td>
                                    <td>
                                        5                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>KABRAS SUGAR</td>
                                    <td>
                                        2                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>LEST COMM</td>
                                    <td>
                                        7                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>MEGA STRUCTURES ENTERPRISES</td>
                                    <td>
                                        11                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>MT. KENYA SPEED GOVERNOR CENTRE</td>
                                    <td>
                                        17                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>NAKURU VALLEY</td>
                                    <td>
                                        2                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>NEBSAM DIGITAL SOLUTIONS</td>
                                    <td>
                                        24                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>PEEJAY & SONS CO LTD</td>
                                    <td>
                                        1                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>picad</td>
                                    <td>
                                        6                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>RITZ CAR TRACK</td>
                                    <td>
                                        6                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>ROPETO BUSINESS SOLUTIONS</td>
                                    <td>
                                        20                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>SHIV DIESEL SERVICE</td>
                                    <td>
                                        2                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>SIMBA COLT MOTORS</td>
                                    <td>
                                        148                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>SONKUS PRIME SOLUTIONS CO.LTD</td>
                                    <td>
                                        1                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>SUNSCAPE  AUTO LTD</td>
                                    <td>
                                        1                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>TIFFANYS AGENCIES</td>
                                    <td>
                                        1                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>TRANSPORT AND LIFTING SERVICES LTD</td>
                                    <td>
                                        2                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>WALIA AUTO </td>
                                    <td>
                                        28                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>WANJERU</td>
                                    <td>
                                        1                                    </td>
                                </tr>
                                                                    <tr>
                                    
                                    
                                    <td>WARIA AUTO</td>
                                    <td>
                                        4                                    </td>
                                </tr>
                                                                
                                
                                </tr>
                            </table>
                           
                        </div>
                    </div>
                </div>
</div>