<?php 
require'functions.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {
 	$name = trim($_POST['name']); //trim function remove extra spaces in name given by the user.
 	$email = trim($_POST['email']);

}

if (empty($name) || empty($email) || !valid_email($email))
 {
	$status = "Please provide name and email";
}
else{
	add_register_user($name, $email);
	$status = "Thanks for registration your email and name have been submitted";
}
require'index.tmpl.php';
 ?>