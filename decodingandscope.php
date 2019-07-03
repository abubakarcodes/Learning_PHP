<?php 
// $arr = array('name' => 'abubakar' , 'age'=> '21', 'occupation' => 'software-engineer' );
// function pp($arr='anything'){
// echo '<pre>';
// print_r($arr);
// echo '</pre>';
// }
// pp($arr);

$people = array(
array('name' => 'abubakar' , 'age'=> '21', 'occupation' => 'software-engineer' ),
array('name' => 'ahsan' , 'age'=> '22', 'occupation' => 'teacher' ),
array('name' => 'usman' , 'age'=> '23', 'occupation' => 'webdeveloper' ) );
// function array_pluck($topluck, $arr)
// {
//   $ret = array();
//   foreach ($arr as $item) {
//   	$ret[] = $item[$topluck];

//   }
//   return $ret;
// }
// $plucked =array_pluck('occupation', $people );
// print_r($plucked);
function array_pluck($topluck, $arr){
	return array_map(function($item) use($topluck){
		return $item[$topluck];
	}

		, $arr);
}
$names = array_pluck('name', $people);
foreach ($names as $name) {
	print_r($name);
}


 ?>