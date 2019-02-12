<?php
include 'inc/db.php';
if (isset($_GET['post_id'])){
    $id=$_GET['post_id'];
    $user_sql = $conn->exec("UPDATE `posts` SET `status` = '1' WHERE `posts`.`post_id` = '$id' ");
    header('location:posts.php');
}