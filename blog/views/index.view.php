<h1>the blog By <?=$name;?></h1>
<?php foreach ($posts as $post) :?>
<article>
	<h2>
	<a href="single.php?id=<?= $post['id'];?>" >
		<?= $post['title'];  ?>
	</a>
		
	</h2>
</article>
<div class="body">
	<?= $post['body'];?>
</div>
<?php endforeach; ?>