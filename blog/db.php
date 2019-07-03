<?php
require'config.php';
function connect($config){
		  try{
		  	$conn =new PDO ('mysql:host=localhost;dbname='. $config['DB_NAME'], $config['DB_USERNAME'],
		  		$config['DB_PASSWORD']);
		  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  	return $conn;
		  }catch(Exception $e){
		  	return false;
		  }

    } 
function query($query, $bindings, $conn){

	$stmt=$conn->prepare($query);
 $stmt->execute($bindings);
 return ($stmt->rowCount() > 0) ? $stmt : false;
}



  function get($tableName, $conn, $limit=10)
  {
  	try{
  	$result = $conn->query("select * from $tableName ORDER BY id DESC LIMIT $limit");

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
   function get_by_id($id, $conn){
     $query =  query(
      'SELECT * FROM posts WHERE id=:id LIMIT 1' , array( 'id' => $id ) , 
      $conn
    );
     if($query)
     return $query->fetchAll();
   }

 ?>