<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autoblog";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Помилка з'єднання: " . $conn->connect_error);
}
?>