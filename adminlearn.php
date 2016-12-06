<?php
session_start();	
if(!isset($_SESSION['user'])){
header("location: adminlogin.php");
}
?>
<html>
<body>
<?php
$con=mysqli_connect('localhost','root','','information');
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM applicants");

echo "<table border='1'>
<tr>
<th>Licencetype</th>
<th>FirstName</th>
<th>MiddleName</th>
<th>LastName</th>
<th>Father_Name</th>
<th>Mother-Name</th>
<th>Age</th>
<th>BG</th> 
<th>Gender</th>
<th>Contact</th>
<th>DOB</th>
<th>BirthPlace</th>
<th>House_No</th>
<th>Building</th>
<th>Street</th>
<th>Pincode</th>
<th>City</th>
<th>State</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Licence_for'] . "</td>";
  echo "<td>" . $row['FName'] . "</td>";
  echo "<td>" . $row['Mname'] . "</td>";
  echo "<td>" . $row['LName'] . "</td>";
  echo "<td>" . $row['Father_Name'] . "</td>";
  echo "<td>" . $row['Mother_Name'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "<td>" . $row['BG'] . "</td>";
  echo "<td>" . $row['Gender'] . "</td>";
  echo "<td>" . $row['Phone'] . "</td>";
  echo "<td>" . $row['DOB'] . "</td>";
  echo "<td>" . $row['BirthPlace'] . "</td>";
  echo "<td>" . $row['House_No.'] . "</td>";
  echo "<td>" . $row['Building_Name'] . "</td>";
  echo "<td>" . $row['Street'] . "</td>";
  echo "<td>" . $row['Pincode'] . "</td>";
  echo "<td>" . $row['City'] . "</td>";
  echo "<td>" . $row['Temp_State'] . "</td>";
  echo "</tr>";									
}

echo "</table>";

mysqli_close($con);
?>
</body>
</html>