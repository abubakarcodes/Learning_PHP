<!DOCTYPE html>
<html>
<head>
	<title>Post method</title>
	<style>
	form ul{
		padding: 0;
		width: 0;
	}
	form ul li label{
		float:left;
	}
		form ul li{
			list-style:none;
			line-height:50px;
		}
	</style>
</head>
<body>
<?php 
// if (!empty($_POST)) {
// 	print_r($_POST);
// }
// else{
// 	echo "it is empty bro";
// }
if($_SERVER['REQUEST_METHOD']=='post')
{
	if(mail('abubakar@gmail.com', 'hello message', $_POST['message']))
	{
		$status="thank for contacting us";
	}
}


	 ?>
	<form method="post">
	<ul>
		<li>
			<label for="name">Name: </label>
			<input type="text" name="name" id="name">
		</li>
		<li>
			<label for="email">Email: </label>
			<input type="email" name="email" id="email">
		</li>
		<li>
			<label for="message">Message: </label>
			<textarea type="text" name="message" id="message"></textarea>
		</li>
	</ul>
	<button type="submit">Go</button>
	</form>
<?php if(isset($status)) 
{echo $status;}
 ?>
</body>
</html>