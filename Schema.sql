	CREATE TABLE `driver_info` (
  `driverid` int PRIMARY KEY AUTO_INCREMENT,
  `drivername` varchar(255),
  `drivernumber` int,
  `driveremail` varchar(255),
  `password` varchar(255),
  `age` int,
  `gender` varchar(255),
  `d_licence` int,
  `aadhar` int,
  `shift` varchar(255),
  `carid` int,
  `wallet` int DEFAULT 1000
);
 
CREATE TABLE `user_info` (
  `userid` int PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(255),
  `usernumber` int,
  `email` varchar(255),
  `password` varchar(255),
  `wallet` int,
  `city` varchar(255),
  `state` varchar(255),
  `book_status` CHAR DEFAULT "N"
);
 
CREATE TABLE `vehicle_info` (
  `carid` int PRIMARY KEY AUTO_INCREMENT,
  `number` int,
  `model` varchar(255),
  `insurance_issue` datetime,
  `insurance_exp` datetime
);
 
CREATE TABLE `booking` (
  `bookid` int PRIMARY KEY AUTO_INCREMENT,
  `userid` int,
  `driverid` int,
  `carid` int,
  `location_user` int,
  `location_driver` int,
  `destination` varchar(255),
  `price` int,
  `est_time` int,
  `date_time` datetime
);
 
CREATE TABLE `cancel_booking` (
  `bookingid` int PRIMARY KEY,
  `userid` int,
  `driverid` int,
  `date_time` datetime
);
 
CREATE TABLE `accident` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `carid` int,
  `driverid` int,
  `date_time` datetime,
  `location` int,
  `type` varchar(255)
);
 
CREATE TABLE `violation` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `carid` int,
  `driverid` int,
  `date_time` datetime,
  `fine` int,
  `type` varchar(255)
);
 
CREATE TABLE `maintenance` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `carid` int,
  `date_time` datetime,
  `cost` int
);
 
CREATE TABLE `blackbox` (
  `bid` int PRIMARY KEY AUTO_INCREMENT,
  `carid` int,
  `date` DATE,
  `time` INT,
  `speed` FLOAT(5,2),
  `belt` CHAR,
  `water` CHAR,
  `brakes` CHAR,
  `right_front_flash` CHAR,
  `left_front_flash` CHAR,
  `right_back_flash` CHAR,
  `left_back_flash` CHAR,
  `right_brake_light` CHAR,
  `left_brake_light` CHAR,
  `right_r_light` CHAR,
  `left_r_light` CHAR
);
 
CREATE TABLE `obd` (
  `carid` int PRIMARY KEY,
  `temp` int,
  `rpm` int,
  `air_flow_rate` int,
  `oxygen` int,
  `ignition_cycle` int,
  `miles` FLOAT(7,1),
  `speed` FLOAT(5,2)
);
 
CREATE TABLE `feedback` (
  `complainid` int PRIMARY KEY AUTO_INCREMENT,
  `userid` int,
  `driverid` int,
  `bookid` int,
  `remark` varchar(255)
);
 
CREATE TABLE `earning` (
  `bookid` int PRIMARY KEY,
  `bookprice` int,
  `tax` int,
  `driverid` int,
  `salary` int
);
 
ALTER TABLE `driver_info` ADD FOREIGN KEY (`carid`) REFERENCES `vehicle_info` (`carid`);
 
ALTER TABLE `booking` ADD FOREIGN KEY (`userid`) REFERENCES `user_info` (`userid`);
 
ALTER TABLE `booking` ADD FOREIGN KEY (`driverid`) REFERENCES `driver_info` (`driverid`);
 
ALTER TABLE `booking` ADD FOREIGN KEY (`carid`) REFERENCES `vehicle_info` (`carid`);
 
ALTER TABLE `cancel_booking` ADD FOREIGN KEY (`bookingid`) REFERENCES `booking` (`bookid`);
 
ALTER TABLE `cancel_booking` ADD FOREIGN KEY (`userid`) REFERENCES `user_info` (`userid`);
 
ALTER TABLE `cancel_booking` ADD FOREIGN KEY (`driverid`) REFERENCES `driver_info` (`driverid`);
 
ALTER TABLE `accident` ADD FOREIGN KEY (`carid`) REFERENCES `vehicle_info` (`carid`);
 
ALTER TABLE `accident` ADD FOREIGN KEY (`driverid`) REFERENCES `driver_info` (`driverid`);
 
ALTER TABLE `violation` ADD FOREIGN KEY (`carid`) REFERENCES `vehicle_info` (`carid`);
 
ALTER TABLE `violation` ADD FOREIGN KEY (`driverid`) REFERENCES `driver_info` (`driverid`);
 
ALTER TABLE `maintenance` ADD FOREIGN KEY (`carid`) REFERENCES `vehicle_info` (`carid`);
 
ALTER TABLE `blackbox` ADD FOREIGN KEY (`carid`) REFERENCES `vehicle_info` (`carid`);
 
ALTER TABLE `obd` ADD FOREIGN KEY (`carid`) REFERENCES `vehicle_info` (`carid`);
 
ALTER TABLE `feedback` ADD FOREIGN KEY (`userid`) REFERENCES `user_info` (`userid`);
 
ALTER TABLE `feedback` ADD FOREIGN KEY (`driverid`) REFERENCES `driver_info` (`driverid`);
 
ALTER TABLE `feedback` ADD FOREIGN KEY (`bookid`) REFERENCES `booking` (`bookid`);
 
ALTER TABLE `earning` ADD FOREIGN KEY (`bookid`) REFERENCES `booking` (`bookid`);
 
ALTER TABLE `earning` ADD FOREIGN KEY (`driverid`) REFERENCES `driver_info` (`driverid`);
 
ALTER TABLE `vehicle_info` ADD FOREIGN KEY (`number`) REFERENCES `vehicle_info` (`carid`);
 