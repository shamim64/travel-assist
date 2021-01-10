<?php include('server.php'); 

   if (empty($_SESSION['username'])) {
    header('location: login.php');
   }

?>
<!DOCTYPE html>
<html>

<head>
<title>Home Page</title>
<link rel="stylesheet" type ="text/css" href="css/style.css">
</head>

<body>
  <div class = "header">
    <h2>Home Page</h2>
  </div>

  <div class = "content">
    <?php if (isset($_SESSION['success'])): ?>
      <div class = "error success">
        <h3>
          <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
          </h3>
        </div>
    <?php endif ?>

    <?php if (isset($_SESSION["username"])): ?>
      <p>Welcome<strong><?php echo $_SESSION['username']; ?></strong></p></br>
        <div>
      <a href = "login.php" style = "color: red;">Logout</a>
    </div>
    <?php endif ?>    
  </div>
</body>

</html>
