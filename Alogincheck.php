<?php
function test_input($data)
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

session_start();
$_SESSION["Username"];
$_SESSION["password"];
$Username = test_input($_POST["Username"]);
$password = test_input($_POST["password"]);
if($Username&&$password)
{
	$con=mysqli_connect("localhost","root", "") or die("Error connecting");
	$query="select * from information.userid where id='$Username' ";
	$result=mysqli_query($con,$query) ;
	$count=mysqli_num_rows($result);
	if($count!=0)
	{
		$row=mysqli_fetch_array($result);
		$actualpwd=$row['pwd'];
		if($password!=$actualpwd)
		{
			echo "<script>alert('Incorrect password');</script>";
		}
		else
		{
			$_SESSION["user"]=$Username;
			header("location:http://onlinelicencedemo.url.ph/admin.php");
		}
	}
	else
	{
		header("Location:http://onlinelicencedemo.url.ph/adminlogin.php");
		echo "<script>alert('Incorrect username or password');</script>";
		die();
	}
}
else
{
	echo "<script>alert('Enter username and password');</script>";
	die();
}

?>