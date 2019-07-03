<?php 
require'index.php';


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 </head>
 <body>
 <?php 
 // echo HTML::items(array('item1', 'item2', 'item3', 'item4')); 
echo HTML::anchor('index.php', 'About Us');
echo HTML::image('https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/Neville_chamberlain1921.jpg/100px-Neville_chamberlain1921.jpg', 'myImage');

 ?>	 
 </body>
 </html>