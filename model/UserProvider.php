<?php

require_once 'User.php';

class UserProvider 
{
    private PDO $pdo;

     public function __construct(PDO $pdo)
   {
       $this->pdo = $pdo;
   }

    public function registerUser(User $user, string $plainPassword): bool 
    {
        $isExistStatement = $this->pdo->prepare('SELECT id FROM users WHERE username = ?');
        $isExistStatement->execute([$user->getUserName()]);
        $isExisted = $isExistStatement->fetch(PDO::FETCH_ASSOC);

        if ($isExisted) {
            throw new Exception('Пользователь с таким именем уже существует');
        }

        $statement = $this->pdo->prepare('INSERT INTO users (name, username, password) VALUES (:name, :username, :password)');
        return $statement->execute([
            'name' => $user->getName(),
            'username' => $user->getUserName(),
            'password' => md5($plainPassword),
        ]);

        
    }

    public function getByUserNameAndPassword(string $userName, string $password): ?User
    {
        $statement = $this->pdo->prepare(
            'SELECT id, name, username FROM users WHERE username = :username AND password = :password LIMIT 1'
        );
        $statement->execute([
            'username' => $userName,
            'password' => md5($password)
        ]);

        return $statement->fetchObject(User::class, [$userName]) ?: null;
    }
}