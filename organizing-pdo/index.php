<?php 
require'function.php';
$conn=connect($config);
if($conn){
	//do something
$users = get('users', $conn);
	
}
else{
	echo die('could not connect to the db.');
 }


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php 

	if($users){

		foreach ($users as $user) {
		echo "<li>{$user['name']}</li>"; 
	   }
	}
	else{
		echo"no rows returned";
	}


	 ?>
</body>
</html>
