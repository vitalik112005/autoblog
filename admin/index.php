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

<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Адмін-панель</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2>Адміністративна панель</h2>
        </div>
        <div class="col-2">
            <a href="logout.php" class="btn btn-primary">Вихід</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">№</th>
                    <th scope="col">Назва новини</th>
                    <th scope="col">Дії</th> <!-- Додано стовпець "Дії" -->
                </tr>
                </thead>
                <tbody>
                <?php
                $posts = get_news();
                foreach ($posts as $post):
                    ?>
                    <tr>
                        <th scope="row"><?=$post['id']?></th>
                        <td><?=$post['title']?></td>
                        <td>
                            <a href="edit-new.php?post_id=<?=$post['id']?>" class="btn btn-info">Редагувати</a>
                            <a href="delete-new.php?post_id=<?=$post['id'];?>" class="btn btn-danger">Видалити</a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
            <a href="add-new.php" class="btn btn-success">Додати новину</a>
        </div>
    </div>
</div>
</body>
</html>
