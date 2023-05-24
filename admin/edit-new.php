<?php
session_start();
$login = 'admin';
$pass = '123';
if ($_SESSION["login"] !== $login && $_SESSION["password"] !== $pass) {
    header('location: ../login/index.php');
}
include_once '../assets/config.php';
include '../assets/function.php';
?>
<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редагування новини</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Редагування новини</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php
            $post_id = $_GET['post_id'];
            if (!is_numeric($post_id)) exit();
            $post = get_post_by_id($post_id);
            ?>
            <form action="update-new.php" method="post" enctype="multipart/form-data">
                <input type="text" class="form-control" name="id" value="<?=$post['id']?>">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Вкажіть назву новини</label>
                    <input name="title" type="text" class="form-control" id="exampleFormControlInput1" value="<?=$post['title']?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Вкажіть текст новини</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="6"><?=$post['content']?></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Вкажіть зображення для новини</label>
                    <input name="image" type="file" class="form-controlfile" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Вкажіть дату публікації статті</label>
                    <input name="datetime" type="date" class="form-control-file" id="exampleFormControlFile1" value="<?=$post['datetime']?>">
                </div>
                <button type="submit" class="btn btn-primary">Обновити новину</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>