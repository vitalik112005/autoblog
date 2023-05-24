<?php
session_start();
$login = 'admin';
$pass = '123';
if ($_SESSION["login"] !== $login && $_SESSION["password"] !== $pass){
    header('location: ../login/index.php');
}
include_once '../assets/config.php';
include '../assets/function.php';
?>