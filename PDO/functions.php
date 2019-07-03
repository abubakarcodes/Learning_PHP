<?php 
require'config.php';
#mysql_connect('localhost', 'username', 'password');
$id=3;
try
{ $conn = new PDO('mysql:host=localhost; dbname=practice',$config['DB_USERNAME'], $config['DB_PASSWORD']);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $results = $conn->query('SELECT * From users where id=' . $conn->quote($id));
   foreach ($results as $row) {
               print_r($row);
   }
   }
 catch(PDOException $e){
 	echo 'ERROR: ' . $e->getmessage();
 } 
 ?>