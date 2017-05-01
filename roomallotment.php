<?php
include('room-allot.php');
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Room Alloting</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<link rel="stylesheet" href="date.css">
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
fieldset{
	margin-left: -150px;
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
  <script src="date1.js"></script>
  <script src="date2.js"></script>
	<script>
  $( function() {
    $( "#datepicker1" ).datepicker();
	$( "#datepicker2" ).datepicker();
	$( "#datepicker3" ).datepicker();
	  } );
	

				function myFunction2(){
					location.reload();
				}
				function idValidation(s,msg){
					var pattern=/^[1-9]{1}[0-9]{4}$/;
					if(s.value.match(pattern)){document.getElementById('p1').innerText="valid";return true;}
					else{
						document.getElementById('p1').innerText=msg;
						s.focus();
						return false;
					}
				}
				function daynoValidation(s,msg){
					a=1;
					b=500;
					dayno=parseFloat(s.value);
					if(s.value.length<=3 && dayno>=a && dayno<=b)
						{document.getElementById('p2').innerText="valid";return true;}
					
					else{
						document.getElementById('p2').innerText=msg;
						s.focus();
						return false;
					}
				}
				function accomValidation(s,msg){
					a=0;
					b=2;
					accom=parseFloat(s.value);
					if(s.value.length<=1 && accom>=a && accom<=b)
						{document.getElementById('p3').innerText="valid";return true;}
					
					else{
						document.getElementById('p3').innerText=msg;
						s.focus();
						return false;
					}
				}
				function formValidation(){
					var dayno=document.getElementById('dayno');
					var accom=document.getElementById('accom');
					var id=document.getElementById('pid');
					var da1=document.getElementById('datepicker1');
					var da2=document.getElementById('datepicker2');
					var da3=document.getElementById('datepicker3');
					var f1,f2,f3;
					if(dayno.value.length==0 || accom.value.length==0 || id.value.length==0 || da1.value.length==0 || da2.value.length==0 || da3.value.length==0){
						alert('All fields are mandatory');
						return false;
					}
					if(daynoValidation(dayno,"*Please enter no. till 500")){f1=1;} 
					if(accomValidation(accom,"*More than 2 members not allowed")){f2=1;}
					if(idValidation(id,"*Please enter a 5-digit id")){f3=1;} 
					if(f1==1 && f2==1 && f3==1)
						{alert("All Entries are valid\n\nForm Submitted Sucessfully !!!!!!");
						return true;}
					else{return false;}
				}
</script>
</head>

<body onload="document.abc.reset()" style="background-color:silver;">

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
		
		<section id="body" class="width clear">
			<section id="content" class="column-right">
                		
	    <article>
	
				</table>
				<p>&nbsp;</p>
				
				<h1 style="color:#0B2F6B">Room Allotment Form</h1><br>
				<fieldset>

					<legend style="margin-left: -140px"><h2>Patient Details</h2></legend>
					<form method="post" name='abc' action="room-allot.php" onload="document.reset()">
						<div id='form1' onload="document.abc.reset()">
						<label for="pid">Patient ID</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="pid" id="pid" placeholder="Only-existing"/>
						
						<p id='p1'></p>
						<br>
						<br>
						<fieldset id='charges' >
						<legend><h2>Room Categories</h2></legend>
						<p align='center'>
						<b>We are having a variety of Rooms available for you acc. to your convinience<br>
						Please,Select one of the following--></b><br><br>
						<table align='center'>
						<tr><td>Room Type</td><td>Price per Day</td></tr>
						<tr><td><label for="bed1">Single Beded AC Room</label>
						<input type='radio' checked="checked" name="room" id='bed1' value="Single Beded AC Room" /></td><td>Rs1800</td></tr>
						<tr><td><label for="bed2">Single Beded Non-AC Room</label>
						<input type='radio' name="room" id='bed2' value="Single Beded Non-AC Room" /></td><td>Rs1000</td></tr>
						<tr><td><label for="bed3">Two Beded AC Room</label>
						<input type='radio' id='bed3' name="room" value="Two Beded AC Room" /></td><td>Rs1500</td></tr>
						<tr><td><label for="bed4">Two Beded Non-AC Room</label>
						<input type='radio' id='bed4' name="room" value="Two Beded Non-AC Room" /></td><td>Rs900</td></tr>
						<tr><td><label for="bed5">Four Beded AC Room</label>
						<input type='radio' id='bed5' name="room" value="Four Beded AC Room" /></td><td>Rs1000</td></tr>
						<tr><td><label for="bed6">Four Beded Non-AC Room</label>
						<input type='radio' id='bed6' name="room" value="Four Beded Non-AC Room" /></td><td>Rs700</td></tr>
						<tr><td><label for="bed7">AC DORMITORY</label>
						<input type='radio' id='bed7' name="room" value="AC DORMITORY" /></td><td>Rs700</td></tr>
						<tr><td><label for="bed8">Non-AC DORMITORY</label>
						<input type='radio' id='bed8' name="room" value="Non-AC DORMITORY" /></td><td>Rs350</td></tr>
						</table>
						<br>
						</p>
						</fieldset>
						<br>
						<fieldset id='room_details'>
						<legend><h2>Room Details</h2></legend>
						<br>DATE OF Check IN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="date53" id='datepicker1' placeholder="dd/mm/yyyy"/>
						<br><br><br>
						
						<label for="dayno">No. of days for renting the room</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="dayno" id="dayno" placeholder=""/>
						&nbsp;&nbsp;&nbsp;
						<br><br>
						<p id='p2'></p>
						<label for="accom">No. of Companions</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="accom" id="accom" placeholder=""/>
						<p id='p3'></p>
						<br><br>
						</fieldset>
						<br>

						<br>
						<button type='submit' name="submit" onclick='formValidation()'>Submit</button>&nbsp;&nbsp;
						<button type='reset' onclick='myFunction2()'>RESET</button>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <p id="popet"></p>
						</div>
					</form>
	
				</fieldset>
			</article>
		</section>

	</section>
	
		<footer class="clear">
			<div  class="width">
				<p class="left">Site established by Vitians.</p>
				<p class="right">Copyright of Vitians</p>
			</div>
		</footer>
</body>
</html>
