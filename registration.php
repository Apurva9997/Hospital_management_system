<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <title>New User Registration</title>

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

</head>

<body>

  <h3>New User Registration Form</h3>

  <p><font color="orangered" size="+1"><tt><b>*</b></tt></font> indicates a required field</p>

  <form method="post" action="<?=$_SERVER['PHP_SELF']?>">

    <table border="0" cellpadding="0" cellspacing="5">

      <tr>

        <td align="right">

          <p>User ID</p>

        </td>

        <td>

          <input name="newid" type="text" maxlength="100" size="25" />

         <font color="orangered" size="+1"><tt><b>*</b></tt></font>

       </td>

    </tr>

    <tr>

      <td align="right">

        <p>Full Name</p>

      </td>

      <td>

        <input name="newname" type="text" maxlength="100" size="25" />

        <font color="orangered" size="+1"><tt><b>*</b></tt></font>

      </td>

    </tr>

    <tr>

      <td align="right">

        <p>E-Mail Address</p>

      </td>

      <td>

        <input name="newemail" type="text" maxlength="100" size="25" />

        <font color="orangered" size="+1"><tt><b>*</b></tt></font>

      </td>

    </tr>

    <tr valign="top">

      <td align="right">

        <p>Other Notes</p>

      </td>

      <td>

        <textarea wrap="soft" name="newnotes" rows="5" cols="30"></textarea>

      </td>

    </tr>

    <tr>

      <td align="right" colspan="2">

        <hr noshade="noshade" />

        <input type="reset" value="Reset Form" />

        <input type="submit" name="submitok" value="   OK   " />

      </td>

    </tr>

  </table>

</form>

</body>

</html>