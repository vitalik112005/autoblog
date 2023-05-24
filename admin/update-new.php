<?php
$db = new PDO('mysql:host=localhost; dbname=autoblog;', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
session_start();
$login = 'admin';
$pass = '123';
if ($_SESSION["login"] !== $login && $_SESSION["password"] !==
    $pass) {
    header('location: ../login/index.php');
}
//обробника для завантаження файлу
if (isset($_FILES["image"]) && $_FILES["image"]["tmp_name"] !=""){
    move_uploaded_file($_FILES["image"]["tmp_name"], "../img/" .
        $_FILES["image"]["name"]);
    $fileName = "../img/" . $_FILES["image"]["name"];
}
else {
    $fileName = "img/no-image.jpg";
}

$sql = "UPDATE news SET title = :title, content = :content, image = :image, datetime =:date WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(":id", $_POST["id"]);
$stmt->bindParam(":title", $_POST["title"]);
$stmt->bindParam(":content", $_POST["content"]);
$stmt->bindParam(":image", $fileName);
$stmt->bindParam(":date", $_POST["datetime"]);
$stmt->execute();
header("Location: index.php");