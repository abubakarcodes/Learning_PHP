<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>mysql connect</title>
</head>
<body>
<?php

if($results){
  // within here
  foreach ($results as $row) {
  	print_r($row);
  }
}
else{
 echo "no row found";
}

?>
</body>
</html>