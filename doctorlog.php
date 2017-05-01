<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Doctor</title>
	<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#fld1{
	width: 100%;
	background-color: #0F5E62;
}
#fld2{
	width: 21.41%;
	height: 75%;
	float: left;
}
#img{
	height: 20%;
	width: 40%;
}
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
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
<fieldset id="fld2">
<ul id="list">
	<li>
		<a href="Profile">Profile</a>
	</li>
	<li>
		<a href="appointment.php">Appointments</a>
	</li>
	<li>
		<a href="prescription.php">Prescription</a>
	</li>
	<li>
		<a href="reports.php">Reports</a>
	</li>
	<li>
		<a href="Reception.php">Reception</a>
	</li>
	<li>
		<a href="logout.php">Logout</a>
	</li>
</ul>
</fieldset>
</body>
</html>