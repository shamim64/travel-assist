<?php

session_start();
session_destroy();
header('location:index.php');

?>


 <a href="login.php">Sing in</a>