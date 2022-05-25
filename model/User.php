<?php


class User 
{
    private string $userName;
    private array $tasks = [];
    public function __construct(string $userName)
    {
        $this->userName = $userName;
    }

     /**
     * Get the value of userName
     */ 
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Get the value of tasks
     */ 
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Set the value of tasks
     *
     * @return  self
     */ 
    public function setTasks($tasks): void
    {
        $this->tasks[] = $tasks;
    }
}
