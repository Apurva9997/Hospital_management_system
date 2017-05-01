<?php
include('session.php');
?>
<!DOCTYPE html>

<html>
<head>
	<title></title>
</head>
<body>
<form>
	<div>
		<?php
		$var2="";
		$var1="";
		$connection = mysqli_connect("localhost", "root", "");
		$error2=mysqli_connect_error();
		$db = mysqli_select_db($connection,"company") or die($error2);
		// SQL query to fetch information of registerd users and finds user match.
		$result = mysqli_query($connection,"SELECT * FROM patient where patient_login='$login_session'");
		$result2 = mysqli_query($connection,"SELECT patient_pic FROM patient where patient_login='$login_session'");
		$row2 = mysqli_fetch_assoc($result2);
		if($row2["patient_pic"]=='null' OR $row2["patient_pic"]==''){
			echo "<br><br><a href=\"index3.php\" target=\"blank\">Add profile picture<br><br></a>";
		}
		else{
			$tempp="_uploaded";
			$var2 = (string) $row2["patient_pic"];
			$var1 = (string) $tempp;
		}
		while($row = mysqli_fetch_assoc($result)) {
			echo "<br><br>";
        echo "<!doctype html>
<html>

<head><title>Profile</title>
<style>

.color1{
	background-color: #0F5E62;
	color: white;
}
.color2{
	background-color: grey;
	color: white;
}
table{
	cellpadding:10px;
	cellspacing:10px;
}
</style>
</head>

<body style=\"background-color:#DCE6F7;text-align:center;\">
<img src='$var1/$var2' style='float: right;width: 200px;height: 210px;''/>
<table align=\"left\" style=\"text-align:left;\">
<tr class=\"color1\">
<td><h4>Name &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>   <td><h4>$row[fname]&ensp;$row[lname]</h4></td>
</tr><tr class=\"color2\">
<td><h4>Phone &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h4>$row[phone]</h4></td>
</tr>
<tr class=\"color1\">
<td><h4>Address &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h4>$row[address]</h4></td>
</tr>
<tr class=\"color2\">
<td><h4>E-mail &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h4>$row[email]</h4></td>
</tr>
<tr class=\"color1\">
<td><h4>Login-Id &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h4>$row[patient_login]</h4></td>
</tr>
</table>
</body>
</html>";
    	}

		?>
	</div>
</form>
</body>
</html>