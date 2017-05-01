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
	margin-top: -300px;
}
</style>

</head>
<body style="text-align:center;background-color:#DCE6F7">
<ul>
<p style="text-align:center"><a href="add_diagnosis.htm">Add Diagnosis</a></p>
<p style="text-align:center"><a href="profile.php">Home</a></p>
</ul>
<b style="text-align:center">Diagnosis currently available in the hospital</b></br></br>
<?php
$conn = new mysqli("localhost", "root", "", "hospital");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  name,id FROM diagnosis";
$result = $conn->query($sql);
$count=1;
if ($result->num_rows > 0) {
    // output data of each row
echo "<table align=\"center\">";
    while($row = $result->fetch_assoc()) {
        echo "<tr class=\"color1\"><br><td>$count. name: " . $row["name"]. " ". "- id: " . $row["id"].  "</td></br></tr>";
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
