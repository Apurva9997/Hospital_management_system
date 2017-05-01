<?php
include('login.php'); // Includes Login Script
?>
<!DOCTYPE html>
<html>
<head>
<title>Login into your portal</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main" style="float:center;">
<h1>Login into your portal</h1>
<div id="login" style="float:center;">
<h2>Login Form</h2>
<form action="" method="post">
<label>User-Id :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>