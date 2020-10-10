<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<style>
    #bookinfo{
         
                margin-top :50px;
                    margin-bottom :50px;

    
    }    
    #bookinfo h3{
        
        margin-left:20px;
    
    }   
    
    </style>
</head>
<body>
   




<?php
$id = $_POST['qid'];
?>

<div class="container" id="box1" >

<div id="heading1">
<h2>Query-1</h2>
</div>

<div id="heading2">
<h4>Booking information</h4>
</div>




<?php

$host = "localhost";
$user = "root";
$pass = '';
$db='cab_management';
$con=mysqli_connect($host,$user,$pass,$db);



if(isset($_POST['qid'])){



$i = 1;

$sql = "SELECT user_info.username, user_info.email,user_info.wallet, booking.fare, booking.date_time,booking.bookid,booking.location_user,booking.destination
FROM user_info
INNER JOIN booking ON user_info.userid = booking.userid
WHERE user_info.email = '$id'";






$result = mysqli_query($con,$sql);




while($row = mysqli_fetch_array($result)) {

?>




<div id="bookinfo">
<h3> Booking <?php echo $i;  ?> </h3>



<ul id="#dataul" style="  font-size: 20px;
  margin-top: 20px;
  list-style-type:none;
  font-family: Sen ,serif;">
  <li>   Destination:
    <?php  echo  $row['destination'] ;   ?></li>
    <li>   BookId:
    <?php  echo  $row['bookid'] ;   ?></li>

    
    <li>   Fare:
    <?php  echo  $row['fare'] ;   ?></li>
    <li>   Date:
    <?php  echo  $row['date_time'] ;   ?></li>
    <li>   wallet   :
    <?php  echo  $row['wallet'] ;   ?></li>
 
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