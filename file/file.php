<?php 
class File{
	public static function exist($file){
		return file_exists($file);
	}
	public static function size($file)
	{
		return filesize($file);
	}
	public static function name($file)
	{
		return pathinfo($file, PATHINFO_FILENAME);
	}
	public static function extension($file)
	{
		return pathinfo($file, PATHINFO_EXTENSION);
	}
	public static function delete($file){
		return unlink($file);
	}
	public static function  last_updated($file)
	{
		return fileatime($file);
	}
	public static function get($file)
	{	if(static::exist($file)){
		return file_get_contents($file);
	}else
	{
		return false;
	}
	}
}