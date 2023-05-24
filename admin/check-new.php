<?php
$db = new PDO('mysql:host=localhost; dbname=autoblog;', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_FILES["image"]) && $_FILES["image"]["tmp_name"] !=""){
    move_uploaded_file($_FILES["image"]["tmp_name"], "img/" .
        $_FILES["image"]["name"]);
    $fileName = "img/" . $_FILES["image"]["name"];
}
else {
    $fileName = "img/no-image.jpg";
}

$sql = "INSERT INTO news (title, content, image, datetime)
VALUES (:title, :content, :image, :datetime)";
$stmt = $db->prepare($sql);
$stmt->bindValue(":title", $_POST["title"]);
$stmt->bindValue(":content", $_POST["content"]);
$stmt->bindValue(":image", $fileName);
$stmt->bindValue(":datetime", $_POST["datetime"]);
$stmt->execute();
header("Location: index.php");

?>