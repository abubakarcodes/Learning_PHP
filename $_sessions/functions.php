<?php 

function is_logged_in(){
 return	isset($_SESSION['username']);
}
function authenticate($username, $password){
		//validate that against the records
	return ($username==USERNAME && $password==PASSWORD);
}

 ?>