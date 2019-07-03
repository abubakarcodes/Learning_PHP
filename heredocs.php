<?php 

$post = array('Title' => 'My Post',
			  'body' => 'here is the post body',
			  'date' => '20-12-1997',
			  'author' => 'abubakar' );
extract($post); //extract converts title, body, date , and author into variable just give the array variable in extract.
// echo $Title;
// $email=<<<EOT
// <h1>$Title</h1>
// <h2>$author</h2>
// <p>$date</p>
// EOT;
// now we can use it easily as
// //EOT can be any thing like TXT or any text in place of EOT
// $email=<<<EOT 
// <h1>$Title</h1>
// <p>By: $author</p>
// <p>$body</p>
// <p>$date</p>
// EOT;
$email=<<<EOT
<h1>$Title</h1>
<p> By:$author</p>
<p>$body</p>
EOT;

echo $email;
?>