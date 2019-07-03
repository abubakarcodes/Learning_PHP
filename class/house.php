<?php 
/**
 * For house sold or not
 */
class House
{ public $house_color = 'white';
	public $room = 3;
	public $for_sale = true;
	public	function __construct( $house_color = Null )
	{ if($house_color){
		$this->house_color = $house_color;
	}
	}
	public function addRoom(){
		$this->room++;
	}
	public function sell(){
		$this->for_sale= false;
	}
}
$house= new House( 'red' );
$house->addRoom();
$house->addRoom();
echo "This house color is {$house->house_color} and it has {$house->room} rooms";
echo "<br>";
if( $house->for_sale ) {
 echo "it is for sale";
} else {
	echo "it is not for sale";
}
echo "<br>";
$house2= new House('black');
$house2->addRoom();
$house2->addRoom();
$house2->addRoom();
$house->sell();


echo"This house color {$house2->house_color} and it has {$house2->room} rooms";
echo "<br>";
if( $house->for_sale ) {
 echo "it is for sale";
} else {
	echo "it is not for sale";
}