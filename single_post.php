<?php require 'header.php'; ?>





	<?php

	 if (isset($_GET['id'])) {
	 	
	 	$id = $_GET['id'];
	 }

$post = new Post;

$fetch_singlePost = $post->readPostById($id);


	 ?>
	



<div class="card-body">



<h3 style=font-family:cursive;class="mb-4"><?php echo $fetch_singlePost->title; ?></h3>


<a class="btn btn-primary mb-4" href="edit_post.php?id=<?php echo $fetch_singlePost->id;?>">Edit</a>
<a class="btn btn-danger mb-4" href="delete_post.php?id=<?php echo $fetch_singlePost->id; ?>">Delete</a>

<p style=font-family:roboto;><?php echo $fetch_singlePost->content; ?></p>

</div>






 
<?php require 'footer.php'; ?>