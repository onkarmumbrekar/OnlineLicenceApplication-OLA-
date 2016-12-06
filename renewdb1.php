<?php

$con=mysqli_connect("localhost","root","","information");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create table
$sql="CREATE TABLE renew(Licence_For TEXT(100),Permanent_No INT(14),Permanent_issue_date VARCHAR(10),PrevRenewal VARCHAR(10),FName CHAR(30),MName CHAR(30),LName CHAR(30),Father_Name CHAR(30),Mother_Name CHAR(30),Age INT,BG VARCHAR(3),Gender CHAR(4),
Phone INT(11),DOB VARCHAR(10),BirthPlace TEXT(20),House_No VARCHAR(6),Building_Name TEXT(20),Street TEXT(30),City TEXT(20),Pincode INT(6),State TEXT(25))";

// Execute query
if (mysqli_query($con,$sql)) {
  echo "Table renew created successfully";
} else {
  echo "Error creating table: " . mysqli_error($con);
}

?>