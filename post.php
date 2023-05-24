<?php
include_once "header.php";
include_once "assets/function.php";
$post_id = isset($_GET['post_id']) ? $_GET['post_id'] : 0;
if (!is_numeric($post_id)) exit();
$post = get_post_by_id($post_id);
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <img src="<?=$post['image']?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$post['title']?></h5>
                    <p class="card-text"><?=$post['content']?></p>
                    <a href="index.php" class="btn btn-primary">Назад</a>
                </div>
            </div>
        </div>
    </div>
</div>