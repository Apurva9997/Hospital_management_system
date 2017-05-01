<?php
include('session.php');
		$var2="";
		$var1="";
		$connection = mysqli_connect("localhost", "root", "");
		$error2=mysqli_connect_error();
		$db = mysqli_select_db($connection,"company") or die($error2);
		// SQL query to fetch information of registerd users and finds user match.
		$result = mysqli_query($connection,"SELECT * FROM patient where patient_login='$login_session'");
		$result2 = mysqli_query($connection,"SELECT * FROM room where patient_login='$login_session'");
		$row2 = mysqli_fetch_assoc($result);
		$tempp="_uploaded";
		$var2 = (string) $row2["patient_pic"];
		$var1 = (string) $tempp;
		if(mysqli_num_rows($result2)==1) {
			$row=mysqli_fetch_assoc($result2);
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
<td><h4>Room No. &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>   <td><h4>$row[id]</td>
</tr>
<tr>
<td><h4>Room Type &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h4>$row[room_type]</h4></td>
</tr>
<tr>
<td><h4>Check In Date &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h4>$row[check_in]</h4></td>
</tr>
<tr>
<td><h4>Days &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h4>$row[days]</h4></td>
</tr>
<tr>
<td><h4>Companion &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h4>$row[compan]</h4></td>
</tr>
</table>
<button onclick=\"window.print()\">Print Room Details</button>
</body>
</html>";
    	}
    	else{
    		echo "<script>alert('Room not alloted')</script>";
    	}

?>