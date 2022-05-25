<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>

<body>
    <h1><?= $pageHeader ?></h1>
    <?php if ($userName !== null) : ?>
        <h1><?= $userName ?></h1>
        <a href="?controller=task">Задачи</a>
        <a href="?controller=security&action=logout">Выйти</a>
    <?php else : ?>
        <a href="?controller=security">Войти</a>
    <?php endif ?>
</body>

</html>