<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#fld1{
	width: 100%;
	background-color: #0F5E62;
}
#mid {
margin-left:350px;
padding:5px;
border:dashed 1px gray
}
#fld2{
	width: 17%;
	height: 350px;
	float: left;
background-color:#DCE6F7;
}
#img{
	height: 20%;
	width: 40%;
	
}
</style>
</style>
</head>
<body>

<div id="fld1">
	<table>
		<tr>
		<td><img src="logo_ps.jpg" id="img"></td>
		<td><h1 style="font-family:verdana;float:center;color:white">VIT-HOSPITAL PORTAL</h1></td>
		</tr>
	</table>
</div>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<span id="mid">Administrater Portal</span>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<div id="fld2">
<ul id="list">
<li>
		<a href="admin_profile_management.php" target="demo" >Profile</a>
	</li>
	<li>
		<a href="Doctor.php">Doctor</a>
	</li>
	<li>
		<a href="diagnosis.php">Diagnosis</a>
	</li>
	<li>
		<a href="nurse.php">Nurse</a>
	</li>
	<li>
		<a href="roomallotment.php" target="blank" >Room allotment</a>
	</li>

	<li>
		<a href="logout.php" >Logout</a>
	</li>
</ul>
	</div>
</body>

<iframe src="admin_profile_management.php" name="demo" id="fram" height="350px" width="82.5%" style="float:right;"></iframe>
</html>