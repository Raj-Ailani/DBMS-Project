<?php
$host = "localhost";
$user = "root";
$pass = '';
$db='cab_management';
$file = 'DriverDetails0.json';
$con=mysqli_connect($host,$user,$pass,$db);
if($con){
 // echo 'connected successfully to cab_management database';
}

$sql1 = "CREATE TABLE Feedback(
  ComplaintID INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  FUserID INT(8) UNSIGNED ,
  FDriverID INT(8) UNSIGNED ,
  BookingID INT(8) UNSIGNED ,
  Remark VARCHAR(200),
  INDEX (FDriverID),
  FOREIGN KEY (FDriverID)
    REFERENCES Driver_Information (DriverID)
    ON UPDATE CASCADE ON DELETE CASCADE ,
  INDEX (FUserID),
  FOREIGN KEY (FUserID)
    REFERENCES  User_Information (UserID)
    ON UPDATE CASCADE ON DELETE CASCADE
)";
if ($con->query($sql1) === TRUE) {
  //echo "\nTable Feedback created successfully";
} else {
  //echo "\nError creating table: " . $con->error;
}
$sql2 = "CREATE TABLE Driver_Information(
    DriverID INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(30),
    Password INT(10) UNSIGNED ,
    DriverName VARCHAR(30)  ,
    DriverNumber INT(12) UNSIGNED ,
    DriverGender CHAR(10),
    DriverAge INT(2) UNSIGNED,
    Driver_DL INT(15) UNSIGNED,
    AadharCard INT(20) UNSIGNED,
    Shift CHAR(10),
    Remark VARCHAR(100),
    CarId INT(10) UNSIGNED,
    Driver_Curr_Loc DECIMAL(8,6) UNSIGNED ZEROFILL,
    DriverWallet INT(8) UNSIGNED
)";
if ($con->query($sql2) === TRUE) {
 // echo "\nTable Driver_Information created successfully";
} else {
 // echo "\nError creating table: " . $con->error;
}
$sql3 = "CREATE TABLE Vehicle_Information(
  CarID INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  VDriverID INT(8) UNSIGNED,
  CarNumber INT(12) UNSIGNED ,
  CarModel VARCHAR(10) ,
  CarInsurance_IssueDate DATE ,
  CarInsurance_ExpDate DATE,
  -- INDEX(VDriverID),
  FOREIGN KEY (VDriverID)
   REFERENCES Driver_Information (DriverID)
   ON UPDATE CASCADE ON DELETE CASCADE
)";
if ($con->query($sql3) === TRUE) {
  //echo "\nTable Vehicle_Information created successfully";
} else {
  //echo "\nError creating table: " . $con->error;
}

$sql4 = "CREATE TABLE User_Information(
    UserID INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    UserPassword INT(10) UNSIGNED ,
    UserName VARCHAR(30)  ,
    UserGender CHAR(1),
    DriverAge INT(2) UNSIGNED,
    User_Curr_Loc DECIMAL(8,6) UNSIGNED ZEROFILL,
    UserWallet INT(8) UNSIGNED,
    City VARCHAR(20),
    State VARCHAR(20),
    Email VARCHAR(30),
    Address VARCHAR(100)
)";
if ($con->query($sql4) === TRUE) {
 // echo "\nTable User_Information created successfully";
} else {
  //echo "\nError creating table: " . $con->error;
}
 $sql5 = "CREATE TABLE Taxi_Booking_Table(
    BookingID INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    BUserID INT(8) UNSIGNED ,
    BDriverID INT(8) UNSIGNED ,
    CarID INT(8) UNSIGNED ,
    User_Loc DECIMAL(8,6) UNSIGNED ZEROFILL,
    Driver_Loc DECIMAL(8,6) UNSIGNED ZEROFILL,
    Destination VARCHAR(100),
    Price FLOAT(8,3) UNSIGNED,
    Est_Time TIME,
    TDate DATE,
    TTime TIME,
    INDEX (BUserID),
    FOREIGN KEY (BUserID)
     REFERENCES User_Information (UserID)
     ON UPDATE CASCADE ON DELETE CASCADE,
    INDEX (BDriverID),
    FOREIGN KEY (BDriverID)
     REFERENCES Driver_Information (DriverID)
     ON UPDATE CASCADE ON DELETE CASCADE
  )";
if ($con->query($sql5) === TRUE) {
 // echo "\nTable Taxi_Booking_Table created successfully";
} else {
 // echo "\nError creating table: " . $con->error;
}
$sql6 = "CREATE TABLE Cancellation_Taxi_Table(
    CancellationID INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    CBookingID INT(8) UNSIGNED,
    TDate DATE,
    Ttime TIME,
    Loc DECIMAL(8,6) UNSIGNED ZEROFILL,
    Remark VARCHAR(100),
    FOREIGN KEY (CBookingID)
     REFERENCES Taxi_Booking_Table (BookingID)
     ON UPDATE CASCADE ON DELETE CASCADE
)";
if ($con->query($sql6) === TRUE) {
//  echo "\nTable Cancellation_Taxi_Table created successfully";
} else {
  //echo "\nError creating table: " . $con->error;
}
$sql7 = "CREATE TABLE Data(
    DataNo INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    DDriverID INT(8) UNSIGNED,
    CarID INT(8) UNSIGNED,
    Fine FLOAT(8,3) UNSIGNED,
    Type VARCHAR(50),
    FOREIGN KEY (DDriverID)
      REFERENCES Driver_Information (DriverID)
      ON UPDATE CASCADE ON DELETE CASCADE
)";
if ($con->query($sql7) === TRUE) {
 // echo "\nTable Data created successfully";
} else {
 // echo "\nError creating table: " . $con->error;
}
$sql8 = "CREATE TABLE Vehicle_Accident_Records(
    AccID INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    ADriverID INT(8) UNSIGNED,
    ACarID INT(8) UNSIGNED,
    Acc_Date DATE,
    Acc_Place VARCHAR(50),
    Type VARCHAR(50),
    INDEX (ADriverID),
    FOREIGN KEY (ADriverID)
      REFERENCES Driver_Information (DriverID)
      ON UPDATE CASCADE ON DELETE CASCADE,
    INDEX (ACarID),
    FOREIGN KEY (ACarID)
      REFERENCES Vehicle_Information (CarID)
      ON UPDATE CASCADE ON DELETE CASCADE
)";
if ($con->query($sql8) === TRUE) {
 // echo "\nTable Vehicle_Accident_Records created successfully";
} else {
  //echo "\nError creating table: " . $con->error;
}
$sql9 = "CREATE TABLE Vehicle_Maintenance(
    ServiceID INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    VMCarID INT(8) UNSIGNED ,
    ServiceDate DATE,
    ServicePay FLOAT(8,3) UNSIGNED,
    Remark VARCHAR(50),
    FOREIGN KEY (VMCarID)
      REFERENCES Vehicle_Information (CarID)
      ON UPDATE CASCADE ON DELETE CASCADE
  )";
if ($con->query($sql9) === TRUE) {
 // echo "\nTable Vehicle_Maintenance created successfully";
} else {
 // echo "\nError creating table: " . $con->error;
}
$sql10 = "CREATE TABLE BlackBox_Table(
    RecordNo INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    BCarID INT(8) UNSIGNED,
    Speed INT(3) UNSIGNED,
    Ttime TIME,
    Breaks_Journey INT(3),
    Motorway_miles INT(6),
    Acceleration_Braking LINESTRING,
    FOREIGN KEY (BCarID)
      REFERENCES Vehicle_Information (CarID)
      ON UPDATE CASCADE ON DELETE CASCADE
)";
if ($con->query($sql10) === TRUE) {
 // echo "\nTable BlackBox_Table created successfully";
} else {
 // echo "\nError creating table: " . $con->error;
}
$sql11 = "CREATE TABLE OBD_Table(
    ORecordNo INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    OCarID INT(8) UNSIGNED,
    RPM INT(5),
    pedal_position INT(4),
    spark_advance INT(2),
    air_flow_rate FLOAT(6,3),
    coolant_temp FLOAT(7,3),
    oxygen_sensor LINESTRING,
    ignition_cycle INT(2) UNSIGNED,
    FOREIGN KEY (OCarID)
      REFERENCES Vehicle_Information (CarID)
      ON UPDATE CASCADE ON DELETE CASCADE
)";
if ($con->query($sql11) === TRUE) {
//  echo "\nTable OBD_Table created successfully";
} else {
//  echo "\nError creating table: " . $con->error;
}
$sql12 = "CREATE TABLE Earning(
    No INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    -- AS (CONCAT(E_Year,E_Month)),
    E_Year INT(4),
    E_Month INT(2),
    Tax FLOAT(10,2) UNSIGNED,
    Extra_Expenditure FLOAT(10,2) UNSIGNED,
    Expenditure_type VARCHAR(50),
    Salary FLOAT(8,3) UNSIGNED,
    INDEX (E_Year, E_Month),
    FOREIGN KEY (E_Year, E_Month)
      REFERENCES Income_Per_month (Year, Month)
      ON UPDATE CASCADE ON DELETE CASCADE
)";
if ($con->query($sql12) === TRUE) {
  //echo "\nTable Earning created successfully";
} else {
 // echo "\nError creating table: " . $con->error;
}
$sql13 = "CREATE TABLE Income_Per_month(
    Year INT(4) ,
    Month INT(2) ,
    Price FLOAT(10,2) UNSIGNED,
    PRIMARY KEY (Year, Month)
)";
if ($con->query($sql13) === TRUE) {
 // echo "\nTable Income_Per_month created successfully";
} else {
 // echo "\nError creating table: " . $con->error;
}


$data = file_get_contents($file);
$array = json_decode($data, true);


foreach($array as $row){
  $sql = "INSERT INTO driver_information(DriverID,Email,DriverName,DriverNumber,DriverGender,DriverAge,Driver_DL,AadharCard,Shift,CarId,DriverWallet) VALUES('.$row[id].','$row[email]','.$row[firstname].','.$row[number].','.$row[gender].','.$row[age].','.$row[driver_dl].','.$row[aadhar_card].','.$row[shift].','.$row[car_id].','.$row[wallet].')";
mysqli_query($con ,$sql);

}


echo "DATA INSERTED";
$con->close();

?>
