<?php
session_start(); 
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{

$username=$_POST['username'];
$password=$_POST['password'];

$connection = mysqli_connect("localhost", "root", "");
$username = stripslashes($username);
$password = stripslashes($password);

$error2=mysqli_connect_error();
$db = mysqli_select_db($connection,"company") or die($error2);
// SQL query to fetch information of registerd users and finds user match.
$result = mysqli_query($connection,"SELECT * FROM login where password='$password' AND username='$username'");
$result2 = mysqli_query($connection,"SELECT * FROM doctor where id='$username'  AND name='$password'");
 $rowcount=mysqli_num_rows($result);
 $rowcount2=mysqli_num_rows($result2);
 $result3 = mysqli_query($connection,"SELECT * FROM patient where patient_login='$username'  AND password='$password'");
 $rowcount3=mysqli_num_rows($result3);
  $result4 = mysqli_query($connection,"SELECT * FROM warden where warden_login='$username'  AND password='$password'");
 $rowcount4=mysqli_num_rows($result4);
if ($rowcount4==1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: warden.php"); // Redirecting To Other Page
}
elseif ($rowcount3==1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: patient_prof.php"); // Redirecting To Other Page
}
elseif ($rowcount2==1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile_doc.php"); // Redirecting To Other Page
} 
elseif($rowcount==1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page 
}else {
$error = "Username or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}
}
?>

