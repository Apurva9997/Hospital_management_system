<!DOCTYPE html>
<html>
<head>
	<title>
		Prescription
	</title>
</head>
<body>
	<form>
		<fieldset>
			<label>patient</label>
			<select name="username"></select>

<?php  
$connection = mysqli_connect("localhost", "root", "");
mysqli_select_db($connection,"company");

$sql = "SELECT name FROM doctor";
$result = mysqli_query($connection,$sql);

echo "<select name='username'>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['name'] ."'>" . $row['name'] ."</option>";
}
echo "</select>";
?>
		</fieldset>
	</form>
</body>
</html>