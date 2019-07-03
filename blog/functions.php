<?php 
function view($path, $data= null)
{	
	if( $data ){
	extract($data);
    }
    $path=$path.'.view.php';
    include"views/layout.php";
	// include"views/{$path}.view.php"; 

}


 ?>