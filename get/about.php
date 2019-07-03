<!DOCTYPE html>
<html>
<head>
	<title>GET Method</title>
</head>
<body>
  <h1>My post</h1>
<?php 
 echo htmlspecialchars($_GET['name']);
 echo htmlspecialchars('<h3>Abubakar</h3>');
?>



</body>
</html>