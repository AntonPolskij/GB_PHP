<?php

require_once 'model/Task.php';

class TaskProvider 
{   
    private PDO $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function addTask(string $description): bool
    {
        $statement = $this->pdo->prepare('INSERT INTO tasks (description, user_id) VALUES (:description, :user_id)');

        return $statement->execute([
            'description' => $description,
            'user_id' => $_SESSION['user_id']
        ]);
    }

    public function getUndoneList() {
        $statement = $this->pdo->prepare('SELECT * FROM tasks WHERE isDone = 0 AND user_id = :id');
        $statement->execute([
            'id' => $_SESSION['user_id'],
        ]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function doDoneTask(int $id): bool
    {
        $statement = $this->pdo->prepare('UPDATE tasks SET isDone = 1 WHERE id = :id AND user_id = :user_id');
        return $statement->execute([
            'user_id' => $_SESSION['user_id'],
            'id' => $id
        ]);
    }
}