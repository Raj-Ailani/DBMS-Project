<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/styles.css" type="text/css">

</head>
<body>
   






<div class="container" id="box1" >


<div id="heading1">
<h2>Driver Information</h2>
</div>


<?php

$host = "localhost";
$user = "root";
$pass = '';
$db='cab_management';
$con=mysqli_connect($host,$user,$pass,$db);



if(isset($_POST['demail'])){


$email = $_POST['demail'];
$i = 1;

$sql = "SELECT * FROM `driver_info` WHERE `driveremail`= '$email'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {

?>






<div id="#data">
<ul id="#dataul" style="  font-size: 20px;
  margin-top: 20px;
  list-style-type:none;
  font-family: Sen ,serif;">
  <li>   ID:
    <?php  echo  $row['driverid'] ;   ?></li>
    <li>   Name:
    <?php  echo  $row['drivername'] ;   ?></li>
    <li>   Age:
    <?php  echo  $row['age'] ;   ?></li>
    <li>   Driving Licence:
    <?php  echo  $row['d_licence'] ;   ?></li>
 <li>   Aadhar Card Details:
    <?php  echo  $row['aadhar'] ;   ?></li>
    <li>   Shift:
    <?php  echo  $row['shift'] ;   ?></li>
    <li>   Wallet:
    <?php  echo  $row['wallet'] ;   ?></li>
    <?php   ?>
</ul>
</div>


<?php
$i=$i+1;}
mysqli_close($con);
}
else{
    echo "<h2> No</h2>";
}





?></div>



</body>
</html>