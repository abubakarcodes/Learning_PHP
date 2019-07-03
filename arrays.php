<?php 
// $months=array('january','february','March','April','May','June','july','august','September' );
// $months=['january','february','March','April','May','June','july','august','September'];
//var_dump($months);
//print_r($months);
// $social_sites=['google+','facebook','twitter','linkedin','Instagram'];
$social_sites = array('google+' => 'http://googleplus.com',
					  'Facebook' => 'http://facebook.com',
					  'twitter' => 'http://twitter.com');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
<ul>
	<?php 
	// //foreach ($months as $month) {
	// 	//echo "<li>$month</li>";
	
	// }
    // foreach($social_sites as $sites => $url){
    // 	echo"<li><a href='$url'>" . ucwords($sites). "</a></li>";
    // }	
foreach ($social_sites as $sites => $url) : ?>
<li><a href="<?php echo $url;?>" ><?php echo ucwords($sites); ?></a></li>
<?php endforeach ?>
</ul>
</body>
</html>
