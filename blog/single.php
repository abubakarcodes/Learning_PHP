 <?php 
require'blog.php';
//fetch all posts
$post = get_by_id( (int) $_GET['id'], $conn);

if ($post) {
	$post=$post[0];
	
	view('single', array(
	'post' => $post
	));

}
else{
	header('location:index.php');
}

