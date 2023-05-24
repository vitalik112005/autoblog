<?php
include "config.php";

function get_menu()
{
    global $conn;
    $sql = "SELECT * FROM menu";
    $result = $conn->query($sql);
    $menus = $result->fetch_all(MYSQLI_ASSOC);
    return $menus;
}

function get_news()
{
    global $conn;
    $sql = "SELECT * FROM news";
    $result = $conn->query($sql);
    $news = $result->fetch_all(MYSQLI_ASSOC);
    return $news;
}

function get_post_by_id($post_id)
{
    global $conn;
    $sql = "SELECT * FROM news WHERE id = " . $post_id;
    $result = $conn->query($sql);
    $post = $result->fetch_assoc();
    return $post;
}

function get_post_by_category($category_id) {
    global $conn;
    $category_id=mysqli_real_escape_string($conn, $category_id);
    $sql = "SELECT * FROM news WHERE category_id = " .$category_id;
    $result = mysqli_query($conn, $sql);
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $posts;
}

function get_category_title ($category_id) {
    global $conn;
    $category_id = mysqli_real_escape_string($conn, $category_id);
    $sql= "SELECT * FROM categories WHERE id = " . $category_id;
    $result = mysqli_query($conn, $sql);
    $category = mysqli_fetch_assoc ($result);
    return $category;
}

/*Видалення новини*/
function delete_new ($post_id) {
    global $conn;
    $post_id = mysqli_real_escape_string($conn, $post_id);
    $sql = "DELETE FROM news WHERE id =" .$post_id;
    $result = mysqli_query($conn, $sql);
}
?>