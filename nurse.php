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
	margin-top: -100px;
}
</style>
</head>
<body style="text-align:center;background-color:#DCE6F7">
<ul>
<p background-color:#DCE6F7"><a href="add_nurse.htm">Add Nurse</a></p>
<p background-color:#DCE6F7"><a href="profile.php">Home</a></p>
</ul>
<b >Nurses currently working in the hospital</b></br></br>
<?php
$conn = new mysqli("localhost", "root", "", "company");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  id,name, department,age FROM nurse";
$result = $conn->query($sql);
$count= 1;
if ($result->num_rows > 0) {
    // output data of each row
echo "<table align=\"center\">";
    while($row = $result->fetch_assoc()) {
        echo  "<tr class=\"color1\"><br><td>$count. id: " . $row["id"]. " ". "name: " . $row["name"]." "." -department:" . $row["department"]." - age: " . $row["age"]. "</td></br></tr>";
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
