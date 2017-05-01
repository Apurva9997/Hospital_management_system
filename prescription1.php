<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Prescription
	</title>
</head>
<body>
	<form action="prescribe.php" method="POST">
		<fieldset>
			<b style="text-align:centre;margin-left:300px">Prescription</b>

<?php
		$connection = mysqli_connect("localhost", "root", "");
		$error2=mysqli_connect_error();
		$db = mysqli_select_db($connection,"company") or die($error2);
		// SQL query to fetch information of registerd users and finds user match.
		$result1 = mysqli_query($connection,"SELECT name FROM doctor where id='$login_session'");
		$row4 = mysqli_fetch_assoc($result1);
		$result2 = mysqli_query($connection,"SELECT * FROM appointment where doctor='$row4[name]'");
		while($row = mysqli_fetch_array($result2)) {
		echo "<!doctype html>
<html>
<head><title>Appointment</title>
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
<table align=\"center\" style=\"text-align:left;margin:10px 50px 10px 500px\">
<tr class=\"color1\">
<td><h4>Appointment Id &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>   <td><h4>$row[idappoint]</h4></td>
</tr ><tr class=\"color2\">
<td><h4>Date &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h4>$row[date1]</h4></td>
</tr>
<tr class=\"color1\">
<td><h4>Time &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h4>$row[time1]</h4></td>
</tr>
<tr class=\"color2\">
<td><h4>Patient Name &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h4>$row[patname]</h4></td>
</tr>
<tr class=\"color1\">
<td><h4>Patient Address &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h4>$row[pataddress]</h4></td>
</tr>
</table>
</body>
</html>";
    	}

		?>
		</fieldset>
		<?php
			$connection = mysqli_connect("localhost", "root", "");
		$error2=mysqli_connect_error();
		$db = mysqli_select_db($connection,"company") or die($error2);
		// SQL query to fetch information of registerd users and finds user match.
		$result1 = mysqli_query($connection,"SELECT name FROM doctor where id='$login_session'");
		$row4 = mysqli_fetch_assoc($result1);
		$result2 = mysqli_query($connection,"SELECT * FROM appointment where doctor='$row4[name]'");

						echo "<select name='patient'>";
						while ($row2 = mysqli_fetch_array($result2)) {
    					echo "<option value='" . $row2['patient_login'] ."'>" . $row2['patname'] ."->"."Appointment_id=".$row2['idappoint']."</option>";
						}
						echo "</select>";
		?>
		</br></br>
<textarea name="pres" rows="5" cols="18"></textarea><br></br></br>

Submit: <input type="submit" name="submit">
	</form>
</body>
</html>