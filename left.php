<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link rel="stylesheet" type ="text/css" href="css/style.css">

</head>
<center>
<body>
</br>
</br>
<table style="width:100%" align="center">
	
		<tr><td style="font-size:28px">Admin Panel</td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td><a href="adduser.php">Add User</a></td></tr>


<?php }?>


<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updateplace.php">Update Place</a></td></tr>
<?php }?>
<tr><td><a href="viewpackage.php">View Package</a></td></tr>

</table>


</body>
</center>
</html>