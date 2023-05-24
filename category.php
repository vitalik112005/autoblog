<?php
require_once ('header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php
            $category_id = $_GET['category_id'];
            $posts = get_post_by_category($category_id);
            $category = get_category_title($category_id);
            ?>
            <h2><?= $category['name']?></h2>
            <hr>
            <?php foreach ($posts as $post): ?>
                <div class="card mb-4">
                    <img class="card-img-top img-fluid img-size" src="<?=
                    $post['image'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <a href="post.php?post_id=<?=$post['id']?>"> <h3
                                class="card-title"><?=$post['title'];?></h3></a>
                        <p class="card-text"><?=mb_substr($post['content'],0,400)
                            . '...'?></p>
                        <a href="post.php?post_id=<?=$post['id']?>" class="btn
btn-primary">Детальніше &rarr;</a>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
