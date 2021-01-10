<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<title>Tour Packages</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />

<meta name="viewport" content="width=device-width, initial-scale=1">


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="js/jquery.min.js"></script>


</head>
<body>

<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>


<form method="post">
<table border="10" width="100%" height="300px" align="center" class="tableshadow">
<tr><td class="toptd">View Package</td></tr>
<tr><td align="center" style="padding-top:10px;">
<table border="10" align="center" width="95%" >
<tr><td style="font-size:15px; padding:5px; font-weight:bold;">ID</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Package Name</td>

<td style="font-size:15px; padding:5px; font-weight:bold;">Price</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Pic1</td>
</tr>

<?php


while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'>$data[0]</td>
		<td style=' padding:5px;'>$data[1]</td>
		<td style=' padding:5px;'>$data[2]</td>
		
		<td style=' padding:5px;'>$data[4]</td>
		<td style=' padding:5px;'><IMG src='packimages/$data[5]' style='height:50PX' /></td>
		</tr>";

}


?>

</table>

</form>


</body>
</html>