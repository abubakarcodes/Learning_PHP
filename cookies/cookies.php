<?php 
// setcookie('fontsize', 25, time()+60*30, 'www.example.com');
setcookie('prefs[fontsize]', 25);
setcookie('prefs[favrouitecat]' , 'news');
setcookie('prefs[screenwidth]' , 1024);




?>
<!DOCTYPE html>
<html>
<head>
	<title>cookies</title>
	<style type="text/css">
  body{
  	font-size: <?php $_COOKIE['fontsize']; ?>
  }
</style>
</head>
<body>
	<?php 
     if ( isset($_COOKIE['prefs']) ) 
      {
	foreach ($_COOKIE['prefs'] as $key => $value)
	      {

		      echo '<li>'. htmlspecialchars($key) . ':'. htmlspecialchars($value);

	       }
       }


	?>

</body>
</html>