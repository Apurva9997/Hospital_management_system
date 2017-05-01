<?php
include('session.php');
$error=''; 
if (isset($_POST['submit'])) {

$docname=$_POST['doctorname'];
$date2=$_POST['date'];
$time2=$_POST['time'];

$tmp1=substr($date2,0,2);
$tmp2=substr($date2,3,5);
$tmp4=substr($tmp2,0,2);
$tmp3=substr($date2,6,10);
$date3=$tmp4."/".$tmp1."/".$tmp3;
$connection = mysqli_connect("localhost", "root", "");
$error2=mysqli_connect_error();
$db = mysqli_select_db($connection,"company") or die($error2);
$result3 = mysqli_query($connection,"SELECT * FROM appointment where doctor='$docname' AND patient_login='$login_session'");
$rowcount=mysqli_num_rows($result3);
if($rowcount==1){
	echo "<script>alert('Appointment for the same doctor already exists')</script>";
}
else{


$result = mysqli_query($connection,"SELECT * FROM patient where patient_login='$login_session'");
$row2 = mysqli_fetch_assoc($result);
$patient_login=$row2["patient_login"];
$patname=$row2["fname"];
$patphone=$row2["phone"];
$pataddress=$row2["address"];
$patient_pic=$row2["patient_pic"];

$sql = "INSERT INTO `appointment` (`idappoint`, `doctor`, `date1`, `time1`, `patient_login`, `patname`, `patphone`, `pataddress`, `pat_pic`) VALUES (NULL, '$docname','$date3','$time2','$patient_login','$patname','$patphone','$pataddress','$patient_pic')";

if ($connection->query($sql) === TRUE) {
    echo "<script>alert('Appointment registered successfully')</script>";
    header("location:appprint.php");
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

$connection->close();
}
}

?>