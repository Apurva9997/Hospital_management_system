<?php
$id=$_POST['Id'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];

// Create connection
$conn = mysqli_connect("localhost","root","");

$db2=mysqli_select_db($conn,"company");

$sql = "INSERT INTO warden (password,name,phone,address,email,warden_login) VALUES ('$password', '$name', '$phone', '$address', '$email', '$id')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>