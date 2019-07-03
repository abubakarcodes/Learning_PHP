<?php 
/*basename
 dirname
 substr
 pathinfo
 extract*/
$images = glob('img/*.{jpg,png}', GLOB_BRACE);
foreach ($images as $image) {
	// echo $image; it shows the file name with folder name
	// echo basename($image); it shows the file name only
	// echo dirname($image); it shows the file directory name or folder name
	// echo substr($image, 0); its chopping 0 chracter from the string
	// echo substr($image, 4); its chopping out first four character from the string
	// echo substr($image, 5); its chopping out first five chracter form the string
	// echo substr($image, -4); its giving out last four chracter of the file string
	
	// print_r(pathinfo($image)); it will give every detail of file such as directory, file name and extention also very powerful function.
	
	// $data = pathinfo($image);
	// echo $data['extention']; this will give extension details
	// echo $data['basename'];
	// extract(pathinfo($image));
	// echo $extension;
	// echo $filename;
	 // $extension = pathinfo($image, PATHINFO_EXTENSION); it will give out only extension of file Pathinfo_extension is a constant we can also use Pathinfo_filename if we want file name.
	 // echo $extension;
	// echo "\n";
	

	
	// $info = pathinfo($image);
	// $thumbnail = $info['filename'] . '-thumb.'. $info['extension'];
	// echo $thumbnail . "\n"; 
	
// another method to give thumbnail a name is 
    extract(pathinfo($image));
    $thumbnail = 'thumb-'. $filename . $extension;
    echo $thumbnail   . "\n";


}

 ?>