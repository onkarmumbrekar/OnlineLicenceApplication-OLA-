<?php

$con=mysqli_connect("localhost","root","","information");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$checkbox =  mysqli_real_escape_string($con, $_POST['licence']);
$permanent = mysqli_real_escape_string($con, $_POST['permano']);
$permadate = mysqli_real_escape_string($con, $_POST['permadte']);
$prevrenew = mysqli_real_escape_string($con, $_POST['prevrenew']);
$fname = mysqli_real_escape_string($con, $_POST['FN']);
$mname = mysqli_real_escape_string($con, $_POST['MN']);
$lname = mysqli_real_escape_string($con, $_POST['LN']);
$FatherN = mysqli_real_escape_string($con, $_POST['FatherN']);
$MotherN = mysqli_real_escape_string($con, $_POST['MotherN']);
$age = mysqli_real_escape_string($con, $_POST['age']);
$BG = mysqli_real_escape_string($con, $_POST['BG']);
$Gender = mysqli_real_escape_string($con, $_POST['Gender']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$DOB = mysqli_real_escape_string($con, $_POST['DOB']); 
$birthplace = mysqli_real_escape_string($con, $_POST['POB']);
$houseno = mysqli_real_escape_string($con, $_POST['THN']);
$buildname = mysqli_real_escape_string($con, $_POST['TBN']);
$street = mysqli_real_escape_string($con, $_POST['TS']);
$city = mysqli_real_escape_string($con, $_POST['TC']);
$pincode = mysqli_real_escape_string($con, $_POST['TPCN']);
$Tstate = mysqli_real_escape_string($con, $_POST['state']);

$sql="INSERT INTO renew VALUES ('$checkbox', '$permanent', '$permadate', '$prevrenew', '$fname', '$mname', '$lname', '$FatherN', '$MotherN', '$age', '$BG', '$Gender', $phone, '$DOB',
'$birthplace', '$houseno', '$buildname', '$street', '$city', '$pincode', '$Tstate' )";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>