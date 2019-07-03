<?php 
// function set_count($file_name='counter.txt')
// {
//    if(file_exists($file_name) )
//    {
//    	//read the value
//    	$handle = fopen($file_name, 'r');
//    	//increment it by one
//    	$count = (int) fread($handle, 20)+1;
//    //write the new value
//    $handle = fopen($file_name, 'w');
//    fwrite($handle, $count);
//    //close
//    fclose($handle);

   	
//    }
//    else
//    {
//    	//create it
//    	$handle = fopen($file_name, 'w+');
//    	//set the default value of one
//    	$count= 1;
//    	fwrite($handle, $count);
//    	fclose($handle);
//    }
//    return $count;
// }
//  echo set_count();
//  die();




// Improved version from above function
function set_count($file_name='counter.txt')
{
   if(file_exists($file_name) )
   {
   	//read the value and increment it:
   $count = file_get_contents($file_name) + 1;
   //write the content in the file
   file_put_contents($file_name, $count);
   	
   }
   else
   {
   	//create it
   	$handle = fopen($file_name, 'w+');
   	//set the default value of one
   	$count= 1;
   	fwrite($handle, $count);
   	fclose($handle);
   }
   return $count;
}
 $count = set_count();

require'index.tmpl.php';



 ?>