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



if(isset($_POST['uemail'])){


$email = $_POST['uemail'];


$sql = "SELECT * FROM `user_info` WHERE `email`= '$email'";
$result = mysqli_query($con,$sql);





// echo "<br>";
//   echo "<table>
// <tr>
// <th>Firstname</th>
// <th>Wallet</th>
// <th>City</th>
// <th>State</th>

// </tr>";
// while($row = mysqli_fetch_array($result)) {
//   echo "<tr>";
//   echo "<td>" . $row['username'] . "</td>";
 
//   echo "<td>" . $row['wallet'] . "</td>";
//   echo "<td>" . $row['city'] . "</td>";
//   echo "<td>" . $row['state'] . "</td>";
//   echo "</tr>";
// }
// echo "</table>";
mysqli_close($con);
}
else{
    echo "<h2> No</h2>";
}




?>
</body>
</html>