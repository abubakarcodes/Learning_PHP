<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Simple email registration system</title>
	<style type="text/css" media="screen">
	  ul li{
	  	list-style:none;
	  	padding-bottom:10px;
	  }
	  .notice{
	  	color: red;
	  	font-style: italic;
	  }
	</style>
</head>
<body>
	<h1>Join the mailing List</h1>
	<form action=" " method="post" accept-charset="utf-8">
		<?php  if (isset($status)) :  ?>
		<p class="notice"><?php echo $status; ?></p>
		<?php endif; ?>
		<ul>
		<li>
			<label for="name">Name</label>
			<input type="text" name="name" id="name" value=<?php echo old('name'); ?> >
		</li>
		<li>
			<label for="email">Email</label>
			<input type="email" name="email" id="email" value=<?php echo old('email'); ?> >
		</li>
		<br> 
		<li>
			<button type="submit">Sign up</button>
		</li>
		</ul>  
	</form>
</body>
</html>