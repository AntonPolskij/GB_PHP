<?php

class User {
    private string $username;
    private string $email;
    private ?string $sex;
    private ?int $age;
    private bool $isActive = true;
    private DateTime $datecreated;

    function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;

        $this->datecreated = new DateTime();
    }
    
    function getValidAge(?int $age) {
        if ($age > 0 && $age <= 125) {
            return $age;
        }
        return null;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername(): string
    {
        return $this->username ?? 'unknown';
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Get the value of sex
     */ 
    public function getSex(): ?string
    {
        return $this->sex;
    }

    /**
     * Set the value of sex
     *
     * @return  self
     */ 
    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge(?int $age): void
    {
        $this->age = $this->getValidAge($age);
    }
}