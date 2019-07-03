<?php
 $config=array('username'=> 'root', 
				'password' => '');
function connect($config){
		  try{
		  	$conn =new PDO ('mysql:host=localhost;dbname=practice', $config['username'],
		  		$config['password']);
		  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  	return $conn;
		  }catch(Exception $e){
		  	return false;
		  }

    } 
function query($query, $bindings, $conn){

	$stmt=$conn->prepare($query);
	$stmt->execute($bindings);
	$results = $stmt->fetchAll();
	return $results ? $results : false;
}



  function get($tableName, $conn)
  {
  	try{
  	$result = $conn->query("select * from $tableName");

  	if( $result->rowCount() > 0 )
  	{
  		return $result;
  	}
  	else{
  		return false;
  	}		
  			}catch(Exception $e){
  				return false;
  			}
   }

 ?>