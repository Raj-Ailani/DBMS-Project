<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/styles.css" type="text/css">

</head>
<body>
   






<div class="container" id="box1" >


<div id="heading1">
<h2>User Information</h2>
</div>


<?php

$host = "localhost";
$user = "root";
$pass = '';
$db='cab_management';
$con=mysqli_connect($host,$user,$pass,$db);



if(isset($_POST['uemail'])){


$email = $_POST['uemail'];
$i = 1;

$sql = "SELECT * FROM `user_info` WHERE `email`= '$email'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {

?>






<div id="#data">
<ul id="#dataul" style="  font-size: 20px;
  margin-top: 20px;
  list-style-type:none;
  font-family: Sen ,serif;">
 <li>   Username:
    <?php  echo  $row['username'] ;   ?></li>
    
    <li>   City:
    <?php  echo  $row['city'] ;   ?></li>
    
    <li>   State:
    <?php  echo  $row['state'] ;   ?></li>
    
    <?php   ?>
</ul>
<button type="button" class="btn btn-primary" id="bookbtn" >Book Taxi</button>
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