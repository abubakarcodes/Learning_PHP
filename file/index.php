<?php 
require'file.php';
echo file::exist('sample.txt') ? 'it does' : 'it does not';
echo "<br>";
echo File::size('sample.txt');
echo "<br>";
echo File::name('sample.txt');
echo "<br>";
echo File::extension('sample.txt');
echo File::delete('sample2.txt');
 ?>