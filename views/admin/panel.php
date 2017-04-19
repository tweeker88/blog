</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../views/css/style.css">
    <link rel="stylesheet" href="../../views/css/bootstrap.min.css">
    <title>Мой Первый Блог</title>
</head>
<body>
<a class="btn btn-info" href="index.php?action=main" role="button">Вернуться на сайт</a>
<a class="btn btn-primary" href="index.php?action=add" role="button">Добавить запись</a>
<a class="btn btn-danger" href="index.php?action=exit" role="button">Выйти</a>
<table class="table table-striped">
    <tr>
        <th>Дата</th>
        <th>Заголовок</th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($articles as $article): ; ?>
        <tr>
            <td><?= $article['date'] ?></td>
            <td><a target='_blank' href="../../controllers/article.php?id=<?= $article['id'] ?> "><?= $article['title'] ?></a></td>
            <td><a href="index.php?action=edit&id=<?= $article['id'] ?>">Редактировать</a></td>
            <td><a href="index.php?action=delete&id=<?= $article['id'] ?>"">Удалить</a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>