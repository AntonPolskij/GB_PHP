<?php

class Task 
{
    private ?string $description;
    private bool $isDone = false;

    public function __construct(?string $description)
    {
        $this->description = $description;
    }
    

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get the value of isDone
     */ 
    public function getIsDone()
    {
        return $this->isDone;
    }

    /**
     * Set the value of isDone
     *
     * @return  self
     */ 
    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;
    }
}