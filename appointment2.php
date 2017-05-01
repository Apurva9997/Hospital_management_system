<?php
include('session.php');
include('apt.php');
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="styles.css" type="text/css" />
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
#profile {
padding:50px;
border:1px dashed grey;
font-size:20px;
background-color:#DCE6F7
}
#img{
	height: 20%;
	width: 40%;
}
</style>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<script src="date1.js"></script>
<script src="date2.js"></script>
		<title>Patients Form</title>

<link rel="stylesheet" href="date.css">

<script>
		$( function() {
			$( "#da1" ).datepicker();
			} );
	
				function myFunction2(){
					location.reload();
				}
				function regValidation(s,msg){
					var pattern=/^[1-9]{1}[0-9]{4}$/;
					if(s.value.match(pattern)){document.getElementById('p1').innerText="valid";return true;}
					else{
						document.getElementById('p1').innerText=msg;
						s.focus();
						return false;
					}
				}
				function nameValidation(s,msg){
					var pattern=/^[A-Z]{1}[a-z]+\s[A-Z]{1}[a-z]+/;
					if(s.value.match(pattern)){document.getElementById('p2').innerText="valid";return true;}
					else{
						document.getElementById('p2').innerText=msg;
						s.focus();
						return false;
					}
				}
				function emailValidation(s,msg){
					var pattern=/^[a-zA-Z]{1}[A-Za-z0-9-_\.]+[@]{1}[A-Za-z0-9\.]+$/;
					if(s.value.match(pattern)){document.getElementById('p3').innerText="valid";return true;}
					else{
						document.getElementById('p3').innerText=msg;
						s.focus();
						return false;
					}
				}
				function mobValidation(s,msg){
					var pattern=/^[1-9]{1}[0-9]{9}/;
					if(s.value.match(pattern) && s.value.length==10){document.getElementById('p4').innerText="valid";return true;}
					else{
						document.getElementById('p4').innerText=msg;
						s.focus();
						return false;
					}
				}
				function cgpaValidation(s,msg){
					a=0;
					b=100;
					cgpa=parseFloat(s.value);
					if(s.value.length<=3 && cgpa>=a && cgpa<=b)
						{document.getElementById('p5').innerText="valid";return true;}
					
					else{
						document.getElementById('p5').innerText=msg;
						s.focus();
						return false;
					}
				}
				function formValidation(){
					var name=document.getElementById('name');
					var mail=document.getElementById('mail');
					var cgp=document.getElementById('cgpa');
					var reg=document.getElementById('reg');
					var mob=document.getElementById('mob');
					var f1,f2,f3,f4,f5;
					if(name.value.length==0 || mail.value.length==0 || cgp.value.length==0 || reg.value.length==0 || mob.value.length==0){
						alert('All fields are mandatory');
						return false;
					}
					if(regValidation(reg,"*Please enter a 5-digit id")){f1=1;} 
					if(nameValidation(name,"*Please enter Name in correct format")){f2=1;}
					if(emailValidation(mail,"*Not a valid mail ID")){f3=1;}
					if(mobValidation(mob,"*Not a valid mobile no.")){f4=1;}
					if(cgpaValidation(cgp,"*Invalid Age")){f5=1;}
					if(f1==1 && f2==1 && f3==1 && f4==1 && f5==1)
						{alert("All Entries are valid\n\nForm Submitted Sucessfully !!!!!!");
						return true;}
					else{return false;}
				}
		</script>
</head>

<body onload="document.abc.reset()" style="background-color:silver">

		<div id="sitename">
			
		</div>
		<div id="fld1">
	<table>
		<tr>
		<td><img src="logo_ps.jpg" id="img"></td>
		<td><h1 style="font-family:verdana;float:center;color:white">VIT-HOSPITAL PORTAL</h1></td>
		</tr>
	</table>
</div>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
		<section id="body" class="width clear">
				
	    <article>
				<b><u><h1 style="color:#0B2F6B">Online Appointment Form</h1></b></u>
				<fieldset>
				<?php
		echo $login_session;
		
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
			echo "<img src='$var1/$var2' style='float: right;width: 200px;height: 210px;''>";
		}
		while($row = mysqli_fetch_assoc($result)) {
			echo "<br><br>";
        echo "name: " . $row["fname"]." ". $row["lname"]."<br><br>"." ". " - phone: " . $row["phone"]."<br><br>". " "." -address: " . $row["address"]."<br><br>". " "." - email: " . $row["email"]."<br><br>". " "." - Login id: " . $row["patient_login"]."<br><br>";
    	}

		?>
		<form method="POST" target="#">
						<br><br>
						<legend><h2>Doctor Details</h2></legend>
						 <br>&nbsp;&nbsp;&nbsp;<br>
						<label for="doctor">Doctor's Name</label>
						<?php  
						$connection = mysqli_connect("localhost", "root", "");
						mysqli_select_db($connection,"company");

						$sql = "SELECT name FROM doctor";
						$result = mysqli_query($connection,$sql);

						echo "<select name='doctorname'>";
						while ($row = mysqli_fetch_array($result)) {
    					echo "<option value='" . $row['name'] ."'>" . $row['name'] ."</option>";
						}
						echo "</select>";
						?>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
						 <br>&nbsp;&nbsp;&nbsp;<br>
						<label for="da1">Date of Appointment</label>
						<input type="text" id="da1" name="date" placeholder="dd/mm/yyyy"/><br><br>
						
						<label for="time">Time</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="time"id='time'> &nbsp;&nbsp;&nbsp;
						<option value="10:00 am to 1:00 pm" selected="selected">10:00 am to 1:00 pm</option>
						<option value="1:00 pm to 3:00 pm">1:00 pm to 3:00 pm</option>
						<option value="5:00 pm to 8:00 pm">5:00 pm to 8:00 pm</option>
						</select><br><br><br><br>
						<button type="submit" name="submit" onclick="return formValidation()">Submit</button>
						<button type="button" onclick="myFunction2()">Reset</button>
						<br>
						<p id="p9"></p>
						</div>
					</div>
					</form>
				</fieldset>
				<p>&nbsp;</p>
			</article>
		

	</section>
</body>
</html>
