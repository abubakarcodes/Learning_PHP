<?php 

 function  add_register_user($name, $email)
 {		//the file "mail-list.php" is very important we will have to scure the file but in this case we did not secure it 
 	file_put_contents('mail_list.php', "$name : $email\n", FILE_APPEND); //this function override name and email so we use append constant to append these email and name.
 	
}

function old($key)
{
	if(!empty($_REQUEST[$key])){

		return htmlspecialchars($_REQUEST[$key]);

	}
	else
	{
		return '';
	}
}
function valid_email($email){
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}



 ?>