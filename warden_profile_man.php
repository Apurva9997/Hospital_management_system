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
		$connection = mysqli_connect("localhost", "root", "");
		$var2="";
		$var1="";
		$error2=mysqli_connect_error();
		$db = mysqli_select_db($connection,"company") or die($error2);
		// SQL query to fetch information of registerd users and finds user match.
		$result = mysqli_query($connection,"SELECT * FROM warden where warden_login='$login_session'");
		$result2 = mysqli_query($connection,"SELECT * FROM warden where warden_login='$login_session'");
		$row2 = mysqli_fetch_assoc($result);
		if($row2["warden_pic"]=='null' OR $row2["warden_pic"]==''){
			echo "<br><br><a href=\"index3.php\" target=\"blank\">Add profile picture<br><br></a>";
		}
		else{
			$tempp="_uploaded";
			$var2 = (string) $row2["warden_pic"];
			$var1 = (string) $tempp;
		}
		while($row = mysqli_fetch_assoc($result2)) {
			echo "<br><br>";
        echo "<!doctype html>
<html>

<head><title>Profile</title>
<style>
table{
	cellpadding:10px;
	cellspacing:10px;
}
</style>
</head>

<body style=\"background-color:white;text-align:center;\">
<img src='$var1/$var2' style='float: right;width: 200px;height: 210px;''/>
<table align=\"left\" style=\"text-align:left;\">
<tr>
<td><h4>Name &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>   <td><h4>$row[name]
</tr><tr>
<td><h4>Phone &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h4>$row[phone]</h4></td>
</tr>
<tr>
<td><h4>Address &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h4>$row[address]</h4></td>
</tr>
<tr>
<td><h4>E-mail &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h4>$row[email]</h4></td>
</tr>
<tr>
<td><h4>Login-Id &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h4>$row[warden_login]</h4></td>
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