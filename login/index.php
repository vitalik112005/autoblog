<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Сторінка входу</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h1 class="text-center">Вхід</h1>
            <form action="check-login.php" method="POST">
                <div class="mb-3">
                    <label for="login" class="form-label">Логін</label>
                    <input type="login" class="form-control" id="login" name="login" placeholder="Введіть ваш логін">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Введіть ваш пароль">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Запам'ятати мене</label>
                </div>
                <button type="submit" class="btn btn-primary">Увійти</button>
            </form>
            <div class="text-center mt-3">
                <a href="register.php">Ще не зареєстровані? Зареєструватися</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>