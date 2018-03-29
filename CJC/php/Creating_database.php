<?php

$server="localhost";
$username="root";
$password="adminroot";
$dbname = "cjcDB";
$conn = mysqli_connect($server,$username,$password,$dbname);
//
if(!conn){
  die("Connection Failed:".mysqli_connect_error());
  }

 
 //  $sql ="CREATE TABLE info(
 //   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 //   Fname VARCHAR(30) NOT NULL,
 //   Mname VARCHAR(30) NOT NULL,
 //   Lname VARCHAR(50) NOT NULL,
 //   Ret VARCHAR(50) NOT NULL,
 //   Gender VARCHAR(50) NOT NULL,
 //   DOB VARCHAR(50) NOT NULL,
 //   Contact VARCHAR(50) NOT NULL,
 //   Email VARCHAR(50) NOT NULL,
 // Address VARCHAR(50) NOT NULL,
 //   City VARCHAR(50) NOT NULL,
 //   Zip VARCHAR(50) NOT NULL,
 //  Course VARCHAR(50) NOT NULL,
 //  FN VARCHAR(50) NOT NULL,
 //  FC VARCHAR(50) NOT NULL,
 //   FB VARCHAR(50) NOT NULL,
 //   FE VARCHAR(50) NOT NULL,
 // FMS VARCHAR(50) NOT NULL,
 //   MN VARCHAR(50) NOT NULL,
 //   MC VARCHAR(50) NOT NULL,
 //   MB VARCHAR(50) NOT NULL,
 //   ME VARCHAR(50) NOT NULL,
 //     MMS VARCHAR(50) NOT NULL
 //   )";
 //  if(mysqli_query($conn,$sql)){
 //  	echo "Succesfuly added";
 //  }else{
 //  	echo "error".mysqli_error($conn);
 //
 //  }









 ?>
