<?php require 'header.php'; ?>



<div class="card-body">

<?php 

$post = new Post;

$fetch_post = $post->readAllPost();

foreach ($fetch_post as $value):
	
 ?>


	<h3><a style="text-decoration: none; font-family: cursive;" href="single_post.php?id=<?php echo $value->id; ?>"><?php echo $value->title; ?></a></h3>

	<a class="btn btn-primary mt-3" href="edit_post.php?id=<?php echo $value->id; ?>">Edit</a>
	<a class="btn btn-danger mt-3" href="delete_post.php?id=<?php echo $value->id; ?>">Delete</a>
	<p style=font-family:roboto; class="mt-3"><?php echo substr($value->content, 0,300); ?>&nbsp;<a style="text-decoration: none;" href="single_post.php?id=<?php echo $value->id; ?>">read more...</a></p>

<?php endforeach; ?>

</div>





<?php require 'footer.php'; ?>



