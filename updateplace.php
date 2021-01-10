<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<title>Update Places</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />


<meta name="viewport" content="width=device-width, initial-scale=1">


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 
<script src="js/jquery.min.js"></script>

</head>
<body>


<?php
if($_SESSION['loginstatus']=="")
{
	header("location:login.php");
}
?>



<div class = "header">
    <h2><center>Tourist Place</center></h2>
  </div>
  <center>

  <form >

    
    <table border="5" width="350px" height="300px">
      <tr>
        <td colspan="2" align="center"></td>
      </tr>
      <tr>
        <td>Title</td><td><input type="text" /></td>
      </tr>
      <tr>
        <td>Description</td><td><input type="text"/></td>
      </tr>
      <tr>
      	<td >Upload Image</td><td><input type="file"/></td>
      </tr>

      <tr>
        <td>Comment</td><td><input type="text"/></td>
      </tr>
      
      <tr>
        <td colspan="2" align="center"><input type="button" value="Save" /></td>
      </tr>



    </table> 
   


</form>
</center>



</body>
</html>


