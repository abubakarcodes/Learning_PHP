<?php 
session_start();
include"functions.php";
include"config.php";
if ($_SERVER['REQUEST_METHOD'] =='POST') {
	// echo "posted";
	//validae the values
	$username=$_POST['username'];
	$password=$_POST['password'];
if(authenticate($username, $password))
	 {
		//credentials are correct
		$_SESSION['username']=$username;
		header("Location: admin.php");
	}
	else{
		$status= "incorrect password and username";
	}
// if (isset($_POST['loginForm'])) {
// 	echo "posted";

}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
	<style type="text/css">
		form ul li{
			list-style: none;
			padding: 0;
		}
	</style>
</head>
<body>
<form method="post" action="login.php">
	<ul>
		<li>
			<label for="username">Username</label>
			<input type="text" id="name" name="username">
		</li>
		<li>
			<label for="password">Password</label>
			<input type="password" id="password" name="password">
		</li>
		<li>
			<button type="submit" name="loginForm">Login</button>
		</li>
	</ul>
	<?php if(isset($status)){
		echo $status;
	} ?>
</form>
</body>
</html>