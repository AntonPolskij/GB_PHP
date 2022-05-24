<?php

class Task {
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority = 1;
    private bool $isDone = false;
    private User $user;
    private Comment $comment;

    function __construct(User $user)
    {
        $this->user = $user;
        $this->dateCreated = new DateTime();
    }

    function markAsDone(Task $task): void {
        $this->isDone = true;
        $this->setDateUpdated();
        $this->setDateDone($this->dateUpdated);
    }

    function setComment(Comment $comment) {
        $this->comment = $comment;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->setDateUpdated();
    }

    /**
     * Get the value of dateUpdated
     */ 
    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }

    /**
     * Set the value of dateUpdated
     *
     * @return  self
     */ 
    public function setDateUpdated(): void
    {
        $this->dateUpdated = new DateTime();
    }

    /**
     * Get the value of priority
     */ 
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set the value of priority
     *
     * @return  self
     */ 
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    /**
     * Get the value of dateDone
     */ 
    public function getDateDone()
    {
        return $this->dateDone;
    }

    /**
     * Set the value of dateDone
     *
     * @return  self
     */ 
    public function setDateDone($dateUpdated): void
    {
        $this->dateDone = $dateUpdated;
    }

    /**
     * Get the value of isDone
     */ 
    public function getIsDone(): bool
    {
        return $this->isDone;
    }

    /**
     * Get the value of dateCreated
     */ 
    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    /**
     * Get the value of user
     */ 
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * Get the value of comment
     */ 
    public function getComment()
    {
        return $this->comment;
    }
}