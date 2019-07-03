<?php 
session_start();
include"functions.php";
if(!is_logged_in()){
header("Location: login.php");
die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin panel</title>
</head>
<body>
<h1><?php echo $_SESSION['username']; ?></h1>
<button><a href="logout.php">Logout</a></button>
</body>
</html>