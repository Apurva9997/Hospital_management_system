<?php
include('session.php');
?>
<?php

$pres=$_POST['pres'];
$patlg=$_POST['patient'];
$connection = mysqli_connect("localhost", "root", "");
		$error2=mysqli_connect_error();
		$db = mysqli_select_db($connection,"company") or die($error2);
		// SQL query to fetch information of registerd users and finds user match.
		$result1 = mysqli_query($connection,"SELECT name FROM doctor where id='$login_session'");
		$row4 = mysqli_fetch_assoc($result1);
		$result2 = mysqli_query($connection,"SELECT patient_login FROM appointment where doctor='$row4[name]'");

$db2=mysqli_select_db($connection,"company");

$sql = "INSERT INTO prescription (doctor,patient,prescription) VALUES ('$row4[name]','$patlg','$pres')";

if ($connection->query($sql) === TRUE) {
    echo "Prescription updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
?>