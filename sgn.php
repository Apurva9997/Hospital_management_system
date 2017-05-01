<?php
$error=''; 
if (isset($_POST['submit'])) {
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$id2=substr($fname, 0,4).substr($phone, 0,4);
// Create connection
$conn = mysqli_connect("localhost","root","");

$db2=mysqli_select_db($conn,"company");

$sql = "INSERT INTO patient (fname,lname,phone,address,email,password,patient_pic,patient_login) VALUES ('$fname','$lname','$phone','$address','$email','$pass',null,'$id2')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New record created successfully')</script>";
    echo "<script>window.location = \"indexn.php\";</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>