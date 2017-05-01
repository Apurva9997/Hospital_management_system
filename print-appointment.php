<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Patient</title>
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
	<?php
		echo $login_session;
		$var2="";
		$var1="";
		$connection = mysqli_connect("localhost", "root", "");
		$error2=mysqli_connect_error();
		$db = mysqli_select_db($connection,"company") or die($error2);
		// SQL query to fetch information of registerd users and finds user match.
		$result = mysqli_query($connection,"SELECT * FROM appointment where patient_login='$login_session'");
	
		$row2 = mysqli_fetch_assoc($result2);
		if($row2["patient_pic"]=='null' OR $row2["patient_pic"]==''){
			echo "<br><br><a href=\"index3.php\" target=\"blank\">Add profile picture<br><br></a>";
		}
		else{
			$tempp="_uploaded";
			$var2 = (string) $row2["patient_pic"];
			$var1 = (string) $tempp;
			echo "<img src='$var1/$var2' style='float: right;width: 200px;height: 210px;''>";
		}
		while($row = mysqli_fetch_assoc($result)) {
			echo "<br><br>";
        echo "name: " . $row["fname"]." ". $row["lname"]."<br><br>"." ". " - phone: " . $row["phone"]."<br><br>". " "." -address" . $row["address"]."<br><br>". " "." - email: " . $row["email"]."<br><br>". " "." - Login id: " . $row["patient_login"]."<br><br>";
    	}

	?>



	</div>
	</body>
	</html>