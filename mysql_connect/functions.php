<?php 
/*Using an old mysql_connect API anti-pattrens and just for reference*/
function connect($host='localhost', $username, $password, $db='')
  {

     $conn = mysql_connect($host, $username,$password);
     // if(!$conn) die('could not connect');
     if(!empty($db))
       {
          mysql_select_db('practice',$conn);
       }
      return $conn;
   } 

function query($query, $conn) {
   $results = mysql_query($query, $conn);
   if($results){
   		$row= array();
   		while($row = mysql_fetch_object($results)){
         	$rows[]=$row;
 		}

 		return $rows;	
   }

      return false;
}


 ?>
