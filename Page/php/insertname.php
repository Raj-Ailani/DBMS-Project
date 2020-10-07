<!DOCTYPE html>
<html>
<head>

</head>
<body>
   


<?php
$host = "localhost";
$user = "root";
$pass = '';
$db='cab_management';
$con=mysqli_connect($host,$user,$pass,$db);



$name =$_POST['username'];
$email =$_POST['useremail'];
$number =$_POST['usernumber'];
$gender =$_POST['usergender'];
$age =$_POST['userage'];
$dl =$_POST['userdl'];
$aadhar =$_POST['useraadhar'];


$sql="INSERT INTO `driver_information` (`DriverID`, `DriverName`, `Email` ,`DriverNumber` ,`DriverGender` ,`DriverAge` ,`Driver_DL` ,`AadharCard` ) VALUES (NULL, '$name', '$email' , '$number' , '$gender','$age' , '$dl' ,'$aadhar' )";
if ($con->query($sql) === TRUE) {
    echo "<h3> Data Inserted successfully</h3>"
}
else 
{
    echo "failed";
}



// echo "<p>" .$name. "</p>";

// echo "<p>" .$email . "</p>";

// echo "<p>" .$number. "</p>";
// echo "<p>" .$gender . "</p>";
// echo "<p>" .$age . "</p>";
// echo "<p>" .$dl . "</p>";
// echo "<p>" .$aadhar . "</p>";

?>
</body>