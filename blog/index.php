<?php 
require'blog.php';

//fetch all posts
$posts = get('posts', $conn);
 
view('index', array(
	'posts' => $posts,
	'name' => 'abubakar'
	));

 ?>