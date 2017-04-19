<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../views/css/style.css">
    <link rel="stylesheet" href="../views/css/bootstrap.min.css">
    <title>Мой Первый Блог</title>
</head>
<body>
<div class="bg">
    <div class="container">
        <div class="article">
            <h3>
                <?= $article['title'] ?>
            </h3>
            <em>Опубликовано <?= $article['date'] ?></em>
            <p><?= $article['content'] ?></p>
        </div>
    </div>
    <footer>

    </footer>
</div>
</body>
</html>