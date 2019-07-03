<?php 
require'config.php';
#mysql_connect('localhost', 'username', 'password');
$letter='a%';
try
{ $conn = new PDO('mysql:host=localhost; dbname=practice',$config['DB_USERNAME'], $config['DB_PASSWORD']);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt =$conn->prepare('INSERT INTO users (name) VALUES (:name)');
	// $stmt->setFetchMode(PDO::FETCH_OBJ);
	$stmt->bindParam('name', $name, PDO::PARAM_STR);
	$users = array('abubakar', 'usman', 'ali');
	foreach ($users as $name) {
		$stmt->execute();
	}


	// $name='Amydoe';
	// $stmt->execute();
	// $name='boodydoe';
	// $stmt->execute();
	// $name='jhonedoe';
	// $stmt->execute();
	// $stmt->execute(array('letter'=> $letter
 //                        ));
  // $stmt->bindParam(':letter', $letter, PDO::PARAM_STR);
  // $stmt->execute();
  // $result=$stmt->fetchAll();
  // print_r($result);
	// while($row= $stmt->fetch()){
	// 	print_r($row);
	// }
   }
 catch(PDOException $e){
 	echo 'ERROR: ' . $e->getmessage();
 } 
 ?>