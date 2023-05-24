<?php
include_once "../assets/config.php";
include "../assets/function.php";
$post_id = $_GET['post_id'];
if (!is_numeric($post_id)) exit();
$post = delete_new($post_id);
header('location: index.php');
?>