<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<style>
    
        #bookinfo{
         margin:15px;
         margin-top :50px;
         margin-bottom :50px;


}    
table {
    margin: 15px;
 
  border-collapse: collapse;
    margin-bottom : 50px;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}

#heading3 h4{

margin:20px;    
font-size: 20px;
}

    </style>
</head>
<body>
   




<?php
$id = $_POST['qid2'];
?>

<div class="container" id="box1" >

<div id="heading1">
<h2>Query-2</h2>
</div>

<div id="heading2">
<h4>Driver Information</h4>
</div>



<?php
$host = "localhost";
$user = "root";
$pass = '';
$db='cab_management';
$con=mysqli_connect($host,$user,$pass,$db);



if(isset($_POST['qid2'])){

    $i = 1;
    $trysql = "SELECT *
    FROM driver_info
    WHERE driver_info.driveremail = '$id'";
    $result1 = mysqli_query($con,$trysql);




    $sql = "SELECT driver_info.drivername,driver_info.driveremail, driver_info.shift, accident.date_time AS accident_record
    FROM driver_info
    INNER JOIN accident ON accident.driverid = driver_info.driverid
    WHERE driver_info.driveremail ='$id'";
    $result = mysqli_query($con,$sql);
    ?>
  
  
  
  <?php
    while($row1 = mysqli_fetch_array($result1)) {
    ?>

    <ul class="list" id="#dataul" style="font-size:20px;
         list-style-type:none; margin:20px;">
  <li>   Driverid:
    <?php  echo  $row1['driverid'] ;   ?></li>
    <li>   DriverName:
    <?php  echo  $row1['drivername'] ;   ?></li>
    <li>   Number:
    <?php  echo  $row1['drivernumber'] ;   ?></li>
    <li>   Driving Licence:
    <?php  echo  $row1['d_licence'] ;   ?></li>
    <li>   Aadhar Card:
    <?php  echo  $row1['aadhar'] ;   ?></li>
    <li>   Shift:
    <?php  echo  $row1['shift'] ;   ?></li>

<?php
};
?>






<div id="heading3">
    <h4>Accident Record<h4>
</div>
    <table>
  <tr>
  <th>Number</th>
  <th>Date And Time</th>
  </tr>
  <?php
    while($row = mysqli_fetch_array($result)) {
    ?>
  <tr>
<?php
echo "<td> Accident-" .$i. "</td>";

echo "<td>". $row['accident_record'] . "</td>";


?>

  </tr>

<?php

$i=$i+1;}?>

</table>
<?php

mysqli_close($con);
}
else{
    echo "<h2> No</h2>";
}
?>



</div>



</body>
</html>