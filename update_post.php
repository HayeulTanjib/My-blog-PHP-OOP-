<?php require 'controller.php'; ?>

<?php 

if (isset($_POST['update'])) {
	
	$id = $_POST['id'];
	$title = $_POST['title'];
	$content = $_POST['content'];

$post = new Post;

$update_post = $post->updatePost($id,$title,$content);

header('location:single_post.php?id='.$id);

}



?>

