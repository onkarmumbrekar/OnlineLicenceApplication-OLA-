<html>
<head>
<script  src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<style>
body
{/*background-image: url('images/background1.jpg');*/background:linear-gradient(rgba(191,216,230,0.4),rgba(75,158,226,0.7)); background-repeat:no-repeat; -webkit-background-size:cover; background-postion:center top; background-attachment:fixed; margin:0px 0px; text-align:center;}
#cont {width:670px; height:500px; text-align:center; position:relative;}
#title {font-size:3em; font-weight:bold; font-family:Poor Richard;}
#st, #ad {box-shadow:2px 2px 5px grey, -2px -2px 5px grey; width:470px; border-radius:10px; background:rgba(255,255,255,0.3);}
#ad {position:absolute; margin-left:100px; font-family:Baskerville; font-size:1.25em;}
p {font-size:1.55em; font-family:Baskerville;}
label {font-size:1.125em; display:inline-block; width:120px; font-family:Baskerville;}
input {font-size:1.125em; font-family:Baskerville; border-radius:15px; padding:3px; background:rgb(240,238,249); height:35px;}
</style>
</head>			

<body>
<div id="cont"><br/>
<p id="title">LOGIN</p>
<div id="ad">
<p>Admin Login</p>
<form name="ad" action="Alogincheck.php" method="post">
<label for="admin">Username: </label>	
<input type="text" id="admin" name="admin"><br/>
<label for="adpwd">Password: </label>
<input type="password" id="adpwd"name="adpwd"><br/><br/>
<input type="submit" name="submit2" value="Login">
</form>
</div>
</div>
</div>


<script>
function validateS()
{		
    	var pattern = /^\d{4}[A-Z]{4}\d{3}$/;
    	var regno = document.getElementById("sid").value;
    	if(pattern.test(regno))
		return true;
    	else
    	{
		alert("Enter valid UserID");
		return false;
    	}
}
</script>


</body>
</html>