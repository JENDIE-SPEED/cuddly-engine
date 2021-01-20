<?php
session_start();
include 'header.php';
require 'auth.php';
include 'db.php';
$company=$_SESSION['company'];
$user=  $_SESSION['user'];
$sql="SELECT * FROM users where company='$company'";
$query=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($query);
$branch=$rows['branch'];
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<div class='container  mt-5 bg-white text-dark'>
<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Technican List</h4>
                            <div class="add-product">
                                <a href="addtech.php"><i class="fa fa-plus" aria-hidden="true"></i>Add Technican</a>
                            </div>
                            <table class="table table-striped" >
                                <tr>
                                    
                                    <th>First name</th>
                                    <th>Second name</th>
                                    <th>Location</th>
                                    <th>Phone</th>
                                    <th>Dealer</th>
                                    <th>remove</th>
                                </tr>
                                <?php 
                                if ($company==="JENDIE") {
                                    # code...
                                    $sql="SELECT * FROM `technician`";
                                $result=mysqli_query($conn,$sql);
                                while ($row=mysqli_fetch_array($result)) {
                                    # code..
                                    ?>
                                    <tr>
                                    
                                    <td><?php echo $row['first_name']; ?></td>
                                    <td><?php echo $row['second_name']; ?></td> 
                                    <td><?php echo $row['branch']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['dealer']; ?></td>
                                        <td>
                                       <a href="suspend.php?id=<?php echo $row['id'];?>"> <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                                    </td>
                                </tr>
                                <?php
                                }
                                
                                } else {
                                    # code..
                                    
                                    $sql="SELECT * FROM `technician` WHERE dealer='$company'";
                                $result=mysqli_query($conn,$sql);
                                while ($row=mysqli_fetch_array($result)) {
                                    # code..
                                    ?>
                                    <tr>
                                    
                                    <td><?php echo $row['first_name']; ?></td>
                                    <td><?php echo $row['second_name']; ?></td> 
                                    <td><?php echo $row['branch']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['dealer']; ?></td>
                                    <td>
                                        
                                        <a href="suspend.php?id=<?php echo $row['id'];?>"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                    </td>
                                </tr>
                                <?php
                                }
                                
                                }
                                
                                
                                ?>
                                
                                </tr>
                            </table>
                           
                        </div>
                    </div>
                </div>
            </div>
