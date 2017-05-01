<!DOCTYPE html>
<html>
<head>
	<title>
		Warden
	</title>
</head>
<body>
<ul>
<li><a href="add_warden.htm">Add Warden</a></li>
<li><a href="profile.php">Home</a></li>
</ul>
<legend>Warden currently working in the hospital</legend>
<?php
$conn = new mysqli("localhost", "root", "", "company");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  id,password,name,phone,address,email,warden_login FROM warden";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>ID: " . $row["id"]. " ". "- password: " . $row["password"]. " "." -name:" . $row["name"]. " "."phone: " . $row["phone"]. " "." - address: " . $row["address"]. " "." -E-mail:". $row["email"]. " "." -Warden-Login-Id:". $row["warden_login"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</body>
</html>
