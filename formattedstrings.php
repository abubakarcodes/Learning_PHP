<?php 

// $name= "abubakar";
// $age= "20";
// $greetings= sprintf("my name is %s and my age is %d", $name, $age);
// echo $greetings;
 // $posted = sprintf("today is %s,%s, %d",'june', '7th', '2012');
 // echo $posted;
// $results= sscanf("june 7th, 2012", "%s, %s %[^,], %d");
//  print_r($results);
 // list($name, $age) =array('abubakar', '21');
 // echo $name;
 // echo $age;
sscanf("june 7th, 2012", "%s,%s,%d",$month, $day, $year);
echo $month;
 ?>