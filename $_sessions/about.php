<?php 
session_start();
echo $_SESSION['username'];
session_destroy();
print_r($_SESSION);   

 ?>
 