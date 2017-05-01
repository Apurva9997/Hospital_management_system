<?php

$error=''; 
if (isset($_POST['submit'])) {

$patient_login=$_POST['pid'];
$room_type=$_POST['room'];
$check_in=$_POST['date53'];
$days=$_POST['dayno'];
$comp=$_POST['accom'];

$tmp1=substr($check_in,0,2);
$tmp2=substr($check_in,3,5);
$tmp4=substr($tmp2,0,2);
$tmp3=substr($check_in,6,10);
$check_in=$tmp4."/".$tmp1."/".$tmp3;

$connection = mysqli_connect("localhost", "root", "");
$error2=mysqli_connect_error();
$db = mysqli_select_db($connection,"company") or die($error2);
$result = mysqli_query($connection,"SELECT * FROM patient where patient_login='$patient_login'");
$rowcount=mysqli_num_rows($result);
if($rowcount==1){


$sql = "INSERT INTO room (id,patient_login,room_type,check_in,days,compan) VALUES (NULL, '$patient_login', '$room_type', '$check_in', '$days', '$comp')";

if ($connection->query($sql) === TRUE) {
    echo "<script>alert('Room alloted successfully')</script>";
	header( "refresh:1;url=profile.php" );
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
}
else{
	echo "<script>alert('Patient ID not found')</script>";
}
}
?>