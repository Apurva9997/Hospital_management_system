<?php
$id=$_POST['Id'];
$name=$_POST['name'];
$age=$_POST['age'];
$qualification=$_POST['qualification'];
$department=$_POST['department'];
$experience=$_POST['experience'];

// Create connection
$conn = mysqli_connect("localhost","root","");

$db2=mysqli_select_db($conn,"company");

$sql = "INSERT INTO doctor (id,name,department,qualification,age,experience) VALUES ('$id','$name','$department','$qualification','$age','$experience')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
header( "refresh:1;url=Doctor.php" );
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>