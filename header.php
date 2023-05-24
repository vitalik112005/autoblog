<!doctype html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">AutoBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                include "assets/function.php";
                $menus = get_menu();
                foreach ($menus as $menu) {
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="category.php?category_id=' . $menu['id'] . '">';
                    echo $menu['title'];
                    echo '</a>';
                    echo '</li>';
                }
                ?>
            </ul>
            <div class="d-flex">
                <form class="d-flex me-2" role="search">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Пошук" aria-label="Search">
                        <span class="input-group-text">
                            <img src="img/search.png" alt="Пошук" width="16" height="16">
                        </span>
                    </div>
                    <!--                    <button class="btn btn-dark" type="submit">Пошук</button>-->
                </form>
                <div class="d-flex">
                    <button class="btn btn-dark me-2" type="button" onclick="window.location.href='login/index.php'">Увійти</button>
                    <button class="btn btn-dark" type="button" onclick="window.location.href='register.php'">Реєстрація</button>
                </div>
            </div>
        </div>
    </div>
</nav>
</body>
</html>
