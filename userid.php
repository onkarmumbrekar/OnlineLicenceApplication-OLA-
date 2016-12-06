<html>
<body>

</body>
<form method="post">

User:<input type="text" maxlength="20" name="user"><br>
Pwd: <input type="text" maxlength="20" name="pwd">

<input type="submit">
</form>

<?php
$con=mysqli_connect("localhost","root","","information");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$user = mysqli_real_escape_string($con, $_POST['user']);
$pwd = mysqli_real_escape_string($con, $_POST['pwd']);
$sql= "INSERT INTO userid VALUES('$user','$pwd')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}else{
echo "1 record added";
}
mysqli_close($con);
?>
</body>
</html>