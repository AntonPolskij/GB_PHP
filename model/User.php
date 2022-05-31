<?php


class User 
{
    private string $userName;
    private string $name;
    private int $id;


    public function __construct(string $userName)
    {
        $this->userName = $userName;
    }

     /**
     * Get the value of userName
     */ 
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * Get the value of name
     */ 
    public function getName(): ?string
    {
        return $this->name;
    }


    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }


    public function setUserName($userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }

   
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }
}
