<?php
include 'inc/db.php';




$title = $_POST['title'];
$cat = $_POST['category'];
$content = $_POST['content'];
$post_id=$_POST['post_id'];

$conn->exec("UPDATE `posts` SET `cat_id` = '$cat', `post_title` = '$title', `content` = '$content'
 WHERE `posts`.`post_id` = 9;
");

?>