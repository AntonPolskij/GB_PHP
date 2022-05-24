<?php

require_once 'Task.php';
require_once 'User.php';
require_once 'Comment.php';
require_once 'TaskService.php';

$user = new User('Anton','anton@mail.ru');

$task1 = new Task($user);

$task1->setDescription('Сделать дз');
$task1->setPriority(3);

TaskService::addComment($user, $task1, 'Комментарий');


$task1->markAsDone($task1);

print_r(($task1));


