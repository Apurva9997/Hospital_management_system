<!DOCTYPE html>
<html>
<head>
	<title>
		Doctor
	</title>
<style>
.color1{
	background-color: #0F5E62;
	color: white;
}
table{
	margin-top: -200px;
}
</style>

</head>
<body style="text-align:center;background-color:#DCE6F7">

<ul >
<p style="text-align:center"><a href="add_doctor.htm">Add Doctor</a></p>
<p style="text-align:center"><a href="profile.php">Home</a></p>
</ul>
<b style="text-align:center">Doctors currently working in the hospital</b></br></br>
<?php
$conn = new mysqli("localhost", "root", "", "company");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  name,id, department,qualification,age,experience FROM doctor";
$result = $conn->query($sql);
$count=1;
if ($result->num_rows > 0) {
    // output data of each row
  echo "<table align=\"center\">";
    while($row = $result->fetch_assoc()) {
        echo "<tr class=\"color1\"></br><td>$count. name: " . $row["name"]. " ". "- id: " . $row["id"]. " "." -department:" . $row["department"]. " "."qualification: " . $row["qualification"]. " "." - age: " . $row["age"]. " "." -experience:". $row["experience"]. "</td></br></tr>";
$count++;
    }
echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
