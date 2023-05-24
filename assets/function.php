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
?>