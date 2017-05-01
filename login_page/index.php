<?php
include('login.php'); // Includes Login Script
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Simple login form</title>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="login_page/css/reset.css">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css'>
    
        <link rel="stylesheet" href="login_page/css/style.css">
  
  </head>

  <body>

    <div class="container">
  <div class="input">
  <br>
  <br>
  <br>

  	<div class="login-heading" style="height: 25px">
      <h1 style="float: left;"><strong>Welcome.</strong> Please login.</h1>

      </div>
      <a href="login_page/signup/signup.php" target="blank" style="float: right;color: black;">SIGN-UP</a>
      <form method="post">
        <input type="text" id="name" name="username" placeholder="Username" required="required" class="input-txt" />
          <input type="password" id="password" name="password" placeholder="Password" required="required" class="input-txt" />
            <button type="submit" class="submit" name="submit"><i class="fa fa-long-arrow-right"></i></button>
    
          </div>
      </form>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>
  </div>
</div>

    
   <span><?php echo $error; ?></span> 
  </body>
</html>
