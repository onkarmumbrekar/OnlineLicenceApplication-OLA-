<?php 
$con=mysqli_connect("localhost","root","");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else {
echo "Connection successful"."br";
}

$sql="CREATE DATABASE INFORMATION";
if (mysqli_query($con,$sql)) {
  echo "Database my_db created successfully"."br";
} else {
  echo "Error creating database: " . mysqli_error($con);
}

mysqli_close($con);

$con=mysqli_connect("localhost","root","","INFORMATION");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Create table
$sql="CREATE TABLE Applicants(FName CHAR(30),LName CHAR(30),FatherN CHAR(30),Age INT,BG VARCHAR(3),Gender CHAR(4))";

// Execute query
if (mysqli_query($con,$sql)) {
  echo "Table persons created successfully";
} else {
  echo "Error creating table: " . mysqli_error($con);
}
?>