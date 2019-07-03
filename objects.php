<?php 
/**
* 
*/
// class person
// {
//      public $name;
//      public $age;
//      public $occupation;	
// 	function __construct($name, $age, $occupation)
// 	{
// 	   $this->name= $name;
// 	   $this->age= $age;
// 	   $this->job= $occupation;
// 	}
// public	function communicate($language='english'){
// 					return "he communicates in $language";
// 	}
// }
// $p = new person('abubakar', '21', 'webdeveloper');
// $anotherp = new person('usman', '22', 'software');
// var_dump($anotherp);
// var_dump($p);
// echo $p->communicate('urdu');
// echo $p->communicate('arabic');
$person = new stdClass;
$person->first= 'Muhammad';
$person->last= 'abubakar';
$person->job= 'webdeveloper';
var_dump($person);
$car = new stdClass();
$car->model='2016';
$car->company='corrola';
$car->color='black';
var_dump($car);
 ?>