<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Главная</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
<header class="container-lg shadow-lg p-3 mb-5 rounded">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/portfolio">Портфолио</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacts">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container-lg shadow-lg p-3 mb-5 rounded">
    <?php include 'application/views/' . $content_view; ?>

</main>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
