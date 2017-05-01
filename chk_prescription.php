<?php
include('session.php');
?>
<?php

$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,"company");
$sql="SELECT * FROM prescription WHERE patient='$login_session'";
$result=mysqli_query($connection,$sql);
while($row = mysqli_fetch_array($result)) {
		echo "<!doctype html>
<html>
<head><title>Appointment</title>
<style>
table{
	cellpadding:10px;
	cellspacing:10px;
}
</style>
</head>

<body style=\"background-color:white;text-align:center;\">
<table align=\"left\" style=\"text-align:left;\">
<tr>
<td><h4>Doctor Name &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>   <td><h4>$row[doctor]</h4></td>
</tr>
<tr>
<td><pre>Prescription &nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</h4></td>   <td><h4>$row[prescription]</pre></td>
</tr>
</table>
</body>
</html>";}


?>