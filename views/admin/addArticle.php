<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../views/css/style.css">
    <link rel="stylesheet" href="../../views/css/bootstrap.min.css">
    <title>Мой Первый Блог</title>
</head>
<body>
<div class="bg">
    <div class="container">
        <form method="post" novalidate action="../../admin/panel/index.php?action=<?= $_GET['action']; ?>&id=<?= $_GET['id'] ?>">
            <div class="form-group">
                <label for="title">Заголовок </label>
                <input type="text" name="title" value="<?= $articles['title']; ?>" class="form-control" id="title"
                       autofocus
                       required>
            </div>

            <div class="form-group">
                <label for="datee">Дата создания</label>
                <input type="date" name="date" value="<?= $articles['date']; ?>" id="date" class="form-control"
                       autofocus
                       required>
            </div>

            <div class="form-group">
                <label for="text">Содержимое </label>
                <textarea name="content" id="text" required><?= $articles['content']; ?></textarea>
            </div>

            <input type="submit" value="Опубликовать" class="btn btn-default" name="btn">

        </form>
    </div>
</div>
</body>
</html>