<?php

require_once 'model/TaskProvider.php';
$pdo = require 'db.php';
$taskProvider = new TaskProvider($pdo);

if (isset($_POST['description'])) {
    ['description' => $description] = $_POST;
    $taskProvider->addTask($description);
}

if(isset($_GET['action']) && $_GET['action'] === 'done') {
    $id = $_GET['id'];
    $taskProvider->doDoneTask($id);
}

$tasks = $taskProvider->getUndoneList();




require_once 'view/tasks.php';