<!DOCTYPE html>
<html>
<head>

</head>
<body>
   


<?php





// $data = file_get_contents($file);
// $array = json_decode($data, true);


// foreach($array as $row){
//   $sql = "INSERT INTO driver_information(DriverID,Email,DriverPassword,DriverName,DriverNumber,DriverGender,DriverAge,Driver_DL,AadharCard,Shift,Driver_Curr_Loc,DriverWallet) VALUES('.$row[id].','$row[email]','.$row[password].','.$row[firstname].','.$row[number].','.$row[gender].','.$row[age].','.$row[driver_dl].','.$row[aadhar_card].','.$row[shift].','.$row[location].','.$row[wallet].')";
// mysqli_query($con ,$sql);

// }


// echo "DATA INSERTED";
















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
    echo "<h3> Data Inserted successfully</h3>";
}
else 
{
    echo "<h3> Failed to insert </h3>";
}



?>
</body>











