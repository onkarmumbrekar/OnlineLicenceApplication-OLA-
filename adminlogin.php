<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="adminlogin.css"/>

<title>OLA Admin Panel</title> 

</head>

<body>

<div class="main">

<form action="Alogincheck.php" method="post">

<b><h1>Admin Login</h1></b>
	<p class="un">
     <label>User Name *
     </label>
     <input type="text" name="Username" id="Username" placeholder="UserName"/>
    </p>
    <p>
     <label>Password*
     </label>
     <input type="password" id="password" name="password" placeholder="******" />
	</p>
	<button class="submit">Submit &raquo;</button>
</form>

</div>

</body>
</html>