<?php

$link = mysqli_connect('localhost','root','','information'); 
if (!$link) { 
	die('Could not connect to MySQL: ' . mysqli_error()); 
} 
echo 'Connection OK';
echo "<br>";

$name1 = mysqli_real_escape_string($link, $_POST['name1']);
$name2 = mysqli_real_escape_string($link, $_POST['name2']);
$gender = mysqli_real_escape_string($link, $_POST['gender']);
$age = mysqli_real_escape_string($link, $_POST['age']);
$maritial = mysqli_real_escape_string($link, $_POST['maritial']);
$mob= mysqli_real_escape_string($link, $_POST['mob2']);
$landline= mysqli_real_escape_string($link, $_POST['landline']);
$upload = mysqli_real_escape_string($link, $_POST['upload']);
$upload1 = mysqli_real_escape_string($link, $_POST['upload1']);
$upload2 = mysqli_real_escape_string($link, $_POST['upload2']);

$sql="INSERT INTO ola VALUES('$name1','$name2','$gender',$age,'$maritial',$mob,$landline,$upload,$upload1,$upload2)";

if (!mysqli_query($link,$sql)) {
  die('Error: ' . mysqli_error($link));
}
echo "1 record added";

mysqli_close($link);

?>