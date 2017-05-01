<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile warden</title>
	<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#fld1{
	width: 100%;
	background-color: #0F5E62;
}
#fld2{
	width: 15%;
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
<div id="fld2">
<ul id="list">
	<li>
		<a href="roomallotment.php" target="blank" >Room allotment</a>
	</li>
	<li>
		<a href="warden_profile_man.php" target="demo" >Profile</a>
	</li>
	<li>
		<a href="logout.php" >Logout</a>
	</li>
</ul>
</div>
<iframe src="warden_profile_man.php" name="demo" id="fram" height="350px" width="82.5%"></iframe>
</body>
</html>