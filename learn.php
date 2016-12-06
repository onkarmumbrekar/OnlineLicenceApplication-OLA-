<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>    <head>
        <title>Learner's From</title>
        <link rel="stylesheet" type="text/css" href="default.css"/>
    </head>
    <body>    
        <form onsubmit="alert('Are you sure you want to submit?')" action="information.php" class="form" method="post">
            <h1>Learner's Form</h1>
			<fieldset class="row0">
				<legend>Vehicle Type
                </legend> 
				<p>
				<label>Motor cycle without gear</label>
				<input type="checkbox" name="licence" value="MCWOG">
				<label>Motor cycle with gear</label>
				<input type="checkbox" name="licence" value="MCWG">
				<label>Invalid Carriage</label>
			    <input type="checkbox" name="licence" value="IC">
				</p>
				<p>
				<label>Light motor vehicle</label>
				<input type="checkbox" name="licence" value="Car/jeep"> 
				<label>Transport vehicle</label>
				<input type="checkbox" name="licence" value="Transport vehicle">
				<label>Road roller</label>
				<input type="checkbox" name="licence" value="RoadRoller">
				</p>
			<fieldset>
            <fieldset class="row1">
                <legend>Personal Info
                </legend>
                <p>
                    <label>First Name *
                    </label>
					<input type="text" name="FN" placeholder="First Name" required>
					<label>Middle Name
					</label>
                    <input type="text" name="MN" placeholder="Middle Name" required>
                    <label>Last Name *
                    </label>
                    <input type="text" name="LN" placeholder="Last Name" required>
                </p>
                <p>
                    <label>Father's/spouse's Name
                    </label>
                    <input type="text" name="FatherN" placeholder="Father's/spouse's Name" required>
                    <label>Mother's maiden Name
                    </label>
                    <input type="text" name="MotherN" placeholder="Mother's maiden Name" required>
                    <label class="obinfo">* obligatory fields
                    </label>
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Address
                </legend>
                <p>
                    <label>House No./Flat No *
                    </label>
                    <input type="text" name="THN" maxlength="7" required>
                </p>
				<p>
				<label>Building Name
				</label> 
				<input type="text" name="TBN" maxlength="25" required>
				</p>
				<p>
                    <label >Street
                    </label>
                    <input type="text" name="TS" class="long" maxlength="50" required>
                </p>
				<p>
                    <label>City *
                    </label>
                    <input type="text" name="TC" class="long" maxlength="20" required/>
                </p>
				<p>
				<label>
				Pincode number *
				</label>
				<input type="text" name="TPCN" maxlength="6" required>
                </p>
				<p>
				<label>State
				</label>
					<select name="state" required>
					<option name="Maharashtra" value="Maharashtra" selected >Maharashtra</option>
					<option name="Gujrat" value="Gujrat">Gujrat</option>
					<option name="Uttarpradesh" value="Uttarpradesh">Uttarpradesh</option>
					<option name="Assam" value="Assam">Assam</option>
					<option name="Bihar" value="Bihar">Bihar</option>
					<option name="Haryana" value="Haryana">Haryana</option>
					</select>
				</p>
                
            </fieldset>
           
            <fieldset class="row4">
                <legend>Contact Info
                </legend>
				<p>
                    <label>Phone *
                    </label>
                    <input type="text" name="phone" maxlength="10" required/>
                </p>
				<p>
                    <label>Office Phone
                    </label>
                    <input type="text" maxlength="10"/>
                </p>
				<p>
                    <label>Email Address
                    </label>
                    <input class="long" type="text" placeholder="abc@xyz.com"/>

                </p>
            </fieldset>
			<fieldset class="row5">
			<legend>Other Info
             </legend>
				<p>
                    <label>Gender *</label>
                    <select name="Gender" required>
                        <option name="Gender" value="Male">Male
                        </option>
                        <option name="Gender" value="Female">Female
                        </option>
					</select>
                </p>
				<p>
				   <label>AGE*</label>
				   <input type="text" maxlength="2"  size="2" name="age">
				   </p>
                <p>
                    <label>Birthdate *
                    </label>
                    <input type="date" name="DOB" required>
                </p>
				
				<p>
				<label>Place Of Birth
				</label>
				<input type="text" name="POB" >
				</p>
				
				<p>
				<label>Blood Group
				</label>
				<select name="BG">
				<option name="A+"value="A+" selected>A+</option>
				<option name="A-" value="A-">A-</option>
				<option name="B+" value="B+">B+</option>
				<option name="B-" value="B-">B-</option>
				<option name="AB+" value="AB+">AB+</option>
				<option name="AB-" value="AB-">AB-</option>
				<option name="O+" value="O+">O+</option>
				<option name="O-" value="O-">O-</option>
				</select>
				</p>
                
			</fieldset>
            <div><button class="button">Submit &raquo;</button></div>
			<div><button type="reset" class="button">Reset</div>
			<div><button class="button">&laquo; Back </div>
        </form>
		
<?php

$fname= $lname= $FatherN= $age= $BG= $Gender= $DOB= $phone= $birthplace= $Tstate= $Pstate= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["FN"]);
  $mname = test_input($_POST["MN"]);
  $lname = test_input($_POST["LN"]);
  $FatherN = test_input($_POST["FatherN"]);
  $MotherN = test_input($_POST["MotherN"]);
  $age = test_input($_POST["age"]);
  $BG = test_input($_POST["BG"]);
  $Gender = test_input($_POST["Gender"]);
  $DOB = test_input($_POST["DOB"]);
  $phone = test_input($_POST["phone"]);
  $birthplace = test_input($_POST["POB"]);
  $Tstate = test_input($_POST["state"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    </body>
</html>