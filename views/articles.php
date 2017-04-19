<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="stylesheet" href="views/css/bootstrap.min.css">
    <title>Мой Первый Блог</title>
</head>
<body>

<div class="bg">
    <div class="container">
        <?php foreach ($artricles as $article): ?>
            <div class="article">
                <div>
                    <h3><a href="controllers/article.php?id=<?= $article['id'] ?>"><?= $article['title'] ?></a></h3>
                    <span class="glyphicon glyphicon-calendar"></span><em> Дата:<?= $article['date']; ?></em>
                    <p><?= $artricles = $articles_connect->ArticleSub($article['content']); ?></p>
                </div>
            </div>

        <?php endforeach ?>
        <footer>

        </footer>
    </div>

</div>

</body>
</html>