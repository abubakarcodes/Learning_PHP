<?php 
$names = array('abubakar', 'usman', 'hamza');
// $names = ['Manager'=>'abubakar',
// 'CEO' =>'salman', 'salesman'=>'aslam'];
//  foreach ($names as $title => $name) {
//  	echo "<li><strong>$title</strong>-$name</li>";
//  	 }
// for ($i=0; $i < count($names); $i++) { 
// 	echo "<li>$names[$i]</li>";
// 	}
	$i=0;
while ($i<count($names)) {
  echo "<li>$names[$i]</li>";
    $i++;
}
 ?>