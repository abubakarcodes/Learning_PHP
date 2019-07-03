<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<style>
	.container{
		width:600px;
		margin: auto;
	}
	 form ul{
	 	padding:0;
	 }
	 form input[type=text], form textarea{
	 	margin-bottom: 1.5em; 
	 	width: 100%;
	 }
	 form textarea{
	 	height: 300px;
	 }
		form li{
			list-style: none;
		}
		label{
			display: block;
		}
	</style>
</head>
<body>
	<div class="container">
	<?php include($path); ?>
	</div>
</body>
</html>