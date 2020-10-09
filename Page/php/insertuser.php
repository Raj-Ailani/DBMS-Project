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



$name =$_POST['uname'];
$email =$_POST['uemail'];
$pwd = $_POST['upwd'];
$number =$_POST['unumber'];
$city = $_POST['ucity'];
$state = $_POST['ustate'];



$sql="INSERT INTO `user_info`(`username`, `email` ,`password` ,`usernumber` ,`city` ,`state`) VALUES ('$name', '$email' , '$pwd' , '$number','$city' , '$state')";
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



