<?php
$name=$_POST['name'];

// Create connection
$conn = mysqli_connect("localhost","root","");

$db2=mysqli_select_db($conn,"hospital");

$sql = "INSERT INTO diagnosis (name) VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
header( "refresh:1;url=diagnosis.php" );
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>