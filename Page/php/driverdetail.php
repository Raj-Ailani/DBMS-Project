<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$host = "localhost";
$user = "root";
$pass = '';
$db='cab_management';
$con=mysqli_connect($host,$user,$pass,$db);
if (isset($_POST['suggestion'])){
  $name= $_POST['suggestion'];

  
 
  $query = "SELECT * FROM `driver_information` WHERE `DriverID`= '$name'";
  $result = mysqli_query($con,$query);
  echo "<br>";
  echo "<table>
<tr>
<th>Firstname</th>
<th>ID</th>
<th>Age</th>
<th> Gender</th>
<th>Shift</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['DriverName'] . "</td>";
  echo "<td>" . $row['DriverID'] . "</td>";
  echo "<td>" . $row['DriverAge'] . "</td>";
  echo "<td>" . $row['DriverGender']  . "</td>";
  echo "<td>" . $row['Shift'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);












}
else{
echo "NOT FOUND";
}
?>
</body>
</html>