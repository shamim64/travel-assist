<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
<head>
<title>User Details</title>

<link href="css/style.css" rel="stylesheet" type="text/css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
 
<script src="js/jquery.min.js"></script>


</head>
<body>


<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>


<div class = "header">
    <h2><center>Add User</center></h2>
  </div>


<form method="post">
<table border="0" width="400px" height="300px" align="center" class="tableshadow">

<tr><td class="lefttxt">User Name</td><td><input type="text" name="t1" required pattern="[a-zA-z1 _]{3,50}" title"Please Enter Only Characters and numbers between 3 to 50 for User name" /></td></tr>
<tr><td class="lefttxt">Password</td><td><input type="password" name="t2" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters and numbers between 1 to 10 for Company name"/></td></tr>
<tr><td class="lefttxt">Confirm Password</td><td><input type="password" name="t3" required pattern="[a-zA-z0-9]{1,10}" title"Please Enter Only Characters and numbers between 1 to 10 for Company name"/></td></tr>

<tr><td>&nbsp;</td><td ><input type="submit" value="SAVE" name="submit" /></td></tr>

</table>
</form>


</body>
</html>