<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>

<link rel="stylesheet" type ="text/css" href="css/style.css">

</head>
<body>
 
  <div class = "header">
    <h2><center>Register</center></h2>
  </div>
  <center>

  <form method= "post" action = "register.php">

    <?php include('errors.php');?>
    <table border="5" width="350px" height="300px">
      <tr>
        <td colspan="2" align="center">Add User</td>
      </tr>
      <tr>
        <td>User Name</td><td><input type="text" /></td>
      </tr>
      <tr>
        <td>Password</td><td><input type="password"/></td>
      </tr>
      <tr>
        <td>Confirm Password</td><td><input type="password"/></td>
      </tr>
      <tr>
        <td>Type of User</td>
        <td><select><option value="Select"></option>
                    <option value="Admin">Admin</option>
                    <option value="General">General</option></select></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="button" value="Register" /></td>
      </tr>



    </table> 
   <div>
      <p>
        Already a member? <a href="login.php">Sign in</a>
      </p> 
</div>


</form>
</center>
</br>
</br>

<center>
  <div>
  <img src = "images/social-icons.png" />
</div>
</center>


</body>
</html>
