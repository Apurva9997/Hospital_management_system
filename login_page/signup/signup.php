<?php
  include('sgn.php'); // Includes Login Script
  ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title></title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    
        <link rel="stylesheet" href="css/style.css">


  </head>

  <body>

    <!-- multistep form -->
<form id="msform" method="post">
  
  <fieldset>
  <span><?php echo $error; ?></span>
    <h2 class="fs-title">Create your account</h2>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="phone" placeholder="Phone" maxlength="10" onblur="check2()" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="text" name="email" placeholder="Email" />
    <input type="password" id="pass" name="pass" placeholder="Password" />
    <input type="password" id="cpass" name="cpass" onblur="check()" placeholder="Confirm Password" /><h4 id="pop"></h4>
    <input type="submit" name="submit" class="submit action-button" />
  </fieldset>
</form>
  <script type="text/javascript">
    function check(){
      var pass = new String(document.getElementById('pass').value);
      var cpass = new String(document.getElementById('cpass').value);
      if(pass.match(cpass)){
          document.getElementById('pop').innerHTML='Password match';
      }
      else
      {
        document.getElementById('pop').innerHTML='Password do not match';
      }
      function check2(){
        var phn = new String(document.getElementById('phone').value);
        var pattern = /[0-9]{10}/;
        if(phn.match(pattern)){
          document.getElementById('pop').innerHTML='Invalid Phone number';
      }
      }
    }
  </script>
  </body>
</html>
