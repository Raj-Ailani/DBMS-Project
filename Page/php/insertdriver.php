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
$pwd = $_POST['userpwd'];
$number =$_POST['usernumber'];
$gender =$_POST['usergender'];
$age =$_POST['userage'];
$dl =$_POST['userdl'];
$aadhar =$_POST['useraadhar'];


$sql="INSERT INTO `driver_info` (`drivername`, `drivernumber` ,`driveremail` ,`password` ,`age` ,`gender`,`d_licence` ,`aadhar`) VALUES ('$name', '$number' , '$email' , '$pwd','$age' , '$gender' ,'$dl' ,'$aadhar')";
if ($con->query($sql) === TRUE) {
    echo "<h3> Data Inserted successfully</h3>";
}
else 
{
    echo "<h3> Failed to insert </h3>";
}

// echo "<h4> Enter another driver data </h3>"

?>
</body>











