<?php 
if ($_SERVER['REQUEST_METHOD']=='POST') {
	setcookie('fontSize', (int) $_POST['font-size'], time()+60*60);
	header('location: font.php');
}
//  if(isset($_POST['font-size']))
//  {
//  	$font_size=$_POST['font-size'];
// }
// elseif (isset($_COOKIE['font-size'])) 
// {
// 	$font_size=$_COOKIE['font-size'];
// }
// else
// 	$font_size=16;
$font_size= isset($_COOKIE['fontSize']) ? $_COOKIE['fontSize'] . 'px' : '16px'; ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>font changer</title>
 	<link rel="stylesheet" href="">
 	<style type="text/css">
 		li{
 			list-style: none;
 		}
 		ul,li{
 			padding:0;
 			margin:0;
 		}
 		body{
 			font-size:<?= htmlspecialchars($font_size) . ';'; ?>;
 		}
 	</style>
 </head>
 <body>
 	<form action="" method="post" accept-charset="utf-8">
 		<li>
			<label for="font-size">Your preffered fontsize?</label> <br/>
			<select name="font-size" id="fontsize">
				<option value="25">25</option>
				<option value="30">30</option>
				<option value="35">35</option>
			</select>
 		</li>
 		<br>
 		<li><input type="submit" name="submit"></li>
 	</form>
 	<h2>My page</h2>
 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>
 </body>
 </html>