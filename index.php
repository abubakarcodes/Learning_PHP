<?php
$social_sites=array('google+' => 'http://googleplus.com', 'facebook' =>'http://www.facebook.com', 'twitter' => 'http://twitter.com');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learning Arrays in PHP</title>
</head>
<body>
<ul>
	<?php
	// foreach ($social_sites as $sites => $url) {
	// 	echo "<li><a href='$url'>" .ucwords($sites). "</a></li>";
	// }
	foreach ($social_sites as $sites => $url) :
	?>
	<li><a href="<?php echo $url?>"><?php echo ucwords($sites)  ?></a></li>
<?php endforeach ?>
</ul>
</body>
</html>