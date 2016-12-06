<?php
session_start();	
if(!isset($_SESSION['user'])){
header("location: adminlogin.php");
}
?>
<html>
<head>
<style>
body{
margin: 0px;
padding: 0px;
background: rgb(130,255,255);
}

div#logo
{
background-color:rgb(255,255,255);
width:50%;
height: 20%;
box-shadow:  5px 5px 10px rgb(255,255,255);
-webkit-border-radius:20px;
-moz-border-radius:20px;
margin-top: 1%;
margin-left: auto;
margin-right: auto;
text-align: center;
}

div#logo h1
{
	color:rgb(5,186,132);
	text-shadow:5px 5px 10px rgb(27,152,99);
  font-size:100px;
  letter-spacing: 30px;
}

div#logo h4
{position: relative;
	color:rgb(5,186,132);
  font-size:23px;
  margin-top: 3%;
  margin-left:240px;
}

#menu{
position: absolute;
width: 30%;
height: 30%;
border-radius: 20px;
top: 45%;
left: 33%;
display: block;}

#menu ul li{
display: block;
list-style-type: none;
width: 80%;
height: 30%;
background: rgb(5,186,132);
border-radius: 20px;
margin-bottom: 5%;
margin-left: 15%;
margin-right: 15%;
}

a{
display: block;
text-decoration: none;
color: white;
padding-left: 15px;
font-family: Poor Richard;
font-size: 32px;
height: 55px;
}

#logout{
position: absolute;
width: 10%;
height: 7%;
background: red;
color: white;
-webkit-border-radius:20px;
-moz-border-radius:20px;
text-align: center;
font-family: Poor Richard;
font-size: 30px;
top:10%;
left: 85%;
}
</style>
<body>
	<div id="logo">
		<h1> OLA</h1>
		<div id="logout"><a href="logout.php" style="font-size:30px;">Logout</a></div>
	</div>

<div id="menu">
<ul>
<li><a href="adminlearn.php">Learner Applicants</a></li>
<li><a href="adminP.php">Permanent Applicants</a></li>
<li><a href="adminR.php">Renewal Applicants</a></li>
</ul>
</div>
</body>
</html>