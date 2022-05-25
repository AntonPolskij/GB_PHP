<?php

require_once 'model/Task.php';

class TaskProvider 
{   
    static function addTask(string $description) {
        $task = new Task($description);
        $_SESSION['user']->setTasks($task);
    }

    static function getUndoneList() {
        $list = [];
        $tasks = $_SESSION['user']->getTasks();
        foreach ($tasks as $task) {
            if (($task->getIsDone()) == false) {
                $list[] = $task;
            }
        }
        return $list;
    }
}