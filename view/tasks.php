<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задачи</title>
</head>

<body>
    <a href="?controller=home">Back</a>
    <form method="post">
        <input type="text" name="description" required placeholder="Напишите задачу">
        <input type="submit" value="Добавить">
    </form>
    <h1>Ваши задачи</h1>
    <a href="?controller=task&action=get_tasks">Получить список</a>
    <ol>
        <?php if (isset($tasks)) : ?>
            <?php foreach ($tasks as $task) : ?>
                <li><?= $task->getDescription()?> <a href="#">Завершить</a></li>
            <?php endforeach ?>
        <?php endif ?>
    </ol>


</body>

</html>