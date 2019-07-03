<?php 
require'function.php';
$conn=connect($config);
if($conn){
	$id=isset($_GET['id']) ? (int)$_GET['id'] : 31;
 $row = query("select * from users where id=:id",array('id'=> $id),
 $conn)[0];
}else
{
	echo"could not connect";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
</head>
<body>
<?php 	if( $row ) : ?>
<h1><?= $row['name'];?>'s Profile</h1>
<?php else : ?>
	<h1>no user</h1>
<?php endif; ?>
</body>
</html>