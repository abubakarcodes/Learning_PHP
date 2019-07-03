<?php 
require'../blog.php';
$data=array();
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
	$title = $_POST['title'];
	$body = $_POST['body'];
if( empty($title) || empty($body) )
{
$data['status']="please fill out inputs";
	}
	else{
		query(
			"INSERT INTO posts(title, body) VALUES(:title, :body)", 
			array('title'=> $title, 
				'body'=> $body),
			 $conn);
		$data['status']="Row has successfully created";
	} 
} 
view('admin/create',$data);


 ?>