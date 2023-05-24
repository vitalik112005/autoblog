<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Автоблог</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .news-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 20px;
        }

        .news-card {
            width: 100%;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .news-card .card-img-top {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .news-card .card-body {
            padding: 16px;
        }

        .news-card .card-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .news-card .card-text {
            color: #555;
            font-size: 14px;
            line-height: 1.4;
        }

        .news-card .btn {
            margin-top: 8px;
        }
    </style>
</head>
<body>
<?php
include "assets/config.php";
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="row news-container">
        <?php $news = get_news(); ?>
        <?php foreach ($news as $new): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card news-card">
                    <img src="<?= $new['image']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $new['title']; ?></h5>
                        <p class="card-text"><?= mb_substr($new['content'], 0, 80) . '...'; ?></p>
                        <a href="post.php?post_id=<?= $new['id']; ?>" class="btn btn-primary">Читати далі</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>