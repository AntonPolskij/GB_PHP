<?php

require_once 'model/TaskProvider.php';

if (isset($_POST['description'])) {
    ['description' => $description] = $_POST;
    TaskProvider::addTask($description);
}

if (isset($_GET['action']) && $_GET['action'] === 'get_tasks') {
    $tasks = TaskProvider::getUndoneList();
}



require_once 'view/tasks.php';