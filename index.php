<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="home.css"/>
<title>Welcome To OLA</title>
<script type="text/javascript">

var slideimages = new Array() // create new array to preload images
slideimages[0] = new Image() // create new instance of image object
slideimages[0].src = "img/1.jpg" // set image object src property to an image's src, preloading that image in the process
slideimages[1] = new Image()
slideimages[1].src = "img/2.jpg"
slideimages[2] = new Image()
slideimages[2].src = "img/3.jpg"
slideimages[3] = new Image()
slideimages[3].src = "img/4.jpg"

</script>
</head>

<body>

<div class="main">
	<div class="row0">
	<div class="logo">
		<h1> OLA
		</h1>
		<h4>Your convenience,Our Passion!!</h4>
	</div>
	</div>
	<div class="row1">
	<div class="r1c1">
		<ul class="nav">
			<li id="first"><a href="main.php">HOME &raquo;</a></li>
			<li><a href="newpage.php">APPLY &raquo;</a></li>
			<li><a href="adminlogin.php">ADMIN &raquo;</a></li>
			<li	id="last"><a href="#">ABOUT US &raquo;</a></li>
		</ul>
	</div>
	<div class="r1c2">
	<img class="canvas" src="1.jpg" id="slide" width="590px" height="270px" />
		<script type="text/javascript">

		//variable that will increment through the images
		var step=0

			function slideit()
			{
				//if browser does not support the image object, exit.
				if (!document.images)
				return
				document.getElementById('slide').src = slideimages[step].src
				if (step<3)
					step++
				else
					step=0
				//call function "slideit()" every 3 seconds
			setTimeout("slideit()",3000)
			}

		slideit();

		</script>
	</div>
	</div>
	<div class="row2">
	<div class="r2c1">
	<h2>Welcome To OLA</h2>
	<p style="color: rgb(5,186,132);margin-top: 5px;font-size: 20px;"The Online licece application site enables you to ease your work.<br>Now no need to wait in the never ending queue for applying.<br>
	You can fill up the form and submit it as and when you are free. The leisure and comfort provided by us  are not matching</div>
	<div class="r2c2">
	      <p style="color: rgb(5,186,132);margin-top: 10px;font-size: 20px;">Designers:
		  <br>Onkar Mumbrekar<br>Suraj Mishra
	</div>
	</div>
</div>



</body>
</html>