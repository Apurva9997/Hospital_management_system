<?php
include('session.php');
		$connection = mysqli_connect("localhost", "root", "");
		$error2=mysqli_connect_error();
		$db = mysqli_select_db($connection,"company") or die($error2);
		// SQL query to fetch information of registerd users and finds user match.
		
		$array=mysqli_query($connection,"SELECT idappoint FROM appointment where patient_login='$login_session'");
		$max=0;
		while($row=mysqli_fetch_assoc($array))
{
	if($row['idappoint']>$max){
		$max=$row['idappoint'];
	}
	else{
		continue;
	}

}
$result = mysqli_query($connection,"SELECT * FROM appointment where patient_login='$login_session' AND idappoint='$max'");
		$row = mysqli_fetch_assoc($result);

		$doct=$row["doctor"];
		$date1=$row["date1"];
		$time1=$row["time1"];
		$patient_login=$row["patient_login"];
		$patname=$row["patname"];
		$patphone=$row["patphone"];
		$pat_pic=$row["pat_pic"];

		$result2 = mysqli_query($connection,"SELECT * FROM doctor where name='$doct'");
		$row2 = mysqli_fetch_assoc($result2);
echo "<!doctype html>
<html>

<head><title>Appointment Details</title>
<style>
table{
	cellpadding:10px;
	cellspacing:10px;
}
			button{
				background-color: skyblue;
				border: 10px;
				color: green;
				padding: 10px 24px;
				transition-duration:0.4s;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 16px;
				border-radius:12px;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
			}
			button:hover
			{
				background-color:#4CAF50;
				color:white;
			}
			.b2d
			{
				text-align: center;
				align: center;               
				float: center;
			
			}
</style>
</head>

<body style=\"background-color:silver;text-align:center;\">
<fieldset>
<legend><h1 style=\"color:blue;\">Appointment-Details</h1></legend>
<table align=\"right\" style=\"width:10%;\"> 
<tr><td style=\"border: 2px solid black;\"> $row[date1]</td></tr>
 </table><br><br><br><br>
<table align=\"center\">
<tr>
<td><h2>Appointment-Time &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h2></td>  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; <td><h2>$row[time1]</h2></td>
</tr>
</table><br>
 <hr>
	<img src='_uploaded/$row2[profile_pic]' align=\"left\" style=\"width:15%;height:220px;\"/>
	<table style=\"width:50%;\" align=\"center-left\">
	<tr><td><h2>Doctor</h2></td></tr>
	
	<tr><td>Doctor Name</td><td>$row2[name]</td>      </tr>
	
	<tr><td>Doctor ID</td>            <td>$row2[id]</td>          </tr>
	
	<tr><td>Department</td>                     <td>$row2[department]</td>           </tr>
	</table><br><br><br><br>
	<hr>
	<img src='_uploaded/$row[pat_pic]' align=\"left\" style=\"width:15%;height:220px;\"/>
	
	<table style=\"width:50%;\" align=\"center-left\">
	<tr>     <td><h2>Patient</h2></td>     </tr>
	
	<tr>                <td>Patient Name</td>     &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;            <td>$row[patname]</td>      </tr>
	
	<tr>       <td>Patient ID</td>             &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;             <td>$row[patient_login]</td>          </tr>
	
	<tr>        <td>Patient Phone</td>            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;              <td>$row[patphone]</td>           </tr>
	
	
	<tr>        <td>Patient Address</td>                  &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;        <td>$row[pataddress]</td>           </tr>
	</table><br><br>
	<hr>
	<br>
	<br>
	<button type=\"button\" onclick=\"window.print();\">Print</button>
			
	</fieldset>
</body>
</html>

";


?>