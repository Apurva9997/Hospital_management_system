<?php
$name=$_POST['name'];
$age=$_POST['age'];
$department=$_POST['department'];

// Create connection
$conn = mysqli_connect("localhost","root","");

$db2=mysqli_select_db($conn,"company");

$sql = "INSERT INTO nurse (id,name,department,age) VALUES ('Id','$name','$department','$age')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
header( "refresh:1;url=nurse.php" );
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>