<?php

class TaskService {
    public static function addComment(User $user,Task $task,string $text) {
        $comment = new Comment($user, $task, $text);
        $task->setComment($comment);
    }
}