<?php
session_start();
$username = "";
$email = "";
$errors = array();

$db = mysqli_connect('localhost','root','','travelassist');

if(isset($POST['register'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$Confirm_Password = mysql_real_escape_string($_POST['Confirm_Password']);

	if(empty($username)){
	    array_push($errors,"Username is required");
	}
	if(empty($email)){
	    array_push($errors,"Email is required");
	}
	if(empty($Password)){
	    array_push($errors,"password is required");
	}
	if(empty($Confirm_Password)){
	    array_push($errors,"Passwords do not match");
	}
	if(count($errors) == 0){
		$password = md5($password_1);
		$sql = "INSERT INTO users (username, email, password)
		 VALUES('$username','$email','$password')";
		 mysqli_query($db,$sql);
		 $_SESSION['username'] = $username;
		 $_SESSION['success'] = "You are now logged in";
		 header('location: index.php');

		 }
}

    if (isset($_POST['login'])){
    	$username = mysql_real_escape_string($_POST['username']);
	    $password = mysql_real_escape_string($_POST['password']);
	    if(empty($username)){
	    array_push($errors,"Username is required");
	    }
		if(empty($Password)){
	    array_push($errors,"password is required");
	    }

	    if(count($errors) == 0){
		    $password = md5($password_1);
		    $query = "SELECT FROM users WHERE username ='$username' AND password ='$password'";
		    $result = mysqli_query($db,$query);
		    if (mysqli_num_rows($result) == 1){
		    	$_SESSION['username'] = $username;
		    	$_SESSION['success'] = "You are now logged in";
		    	header('location: index.php');
		    }
		    else{
		    	array_push ($errors, "wrong username/password combination");
		    }
		 
		 }
    }


    if (isset($_GET['logout'])) {
    	session_destroy();
    	unset($_SESSION['username']);
        header('location: login.php');
    }

?>

