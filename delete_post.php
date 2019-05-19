<?php require 'controller.php'; ?>
<?php 

if (isset($_GET['id'])) {
	
$id  = $_GET['id'];
	$post = new Post;

	$delete_post = $post->deletePost($id);

	header('location:index.php');
}