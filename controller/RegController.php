<?php
require_once 'model/UserProvider.php';

$pdo = require 'db.php';

$error = null;

if (isset($_POST['username'], $_POST['password'])) {

if($_POST['password'] !== $_POST['repeat-password']) {
        $error = 'Пароли не совпадают';
} else {
    try {
    ['name' => $name, 'username' => $userName, 'password' => $password] = $_POST;

    $user = new User($userName);
    $user->setName($name);
    $userProvider = new UserProvider($pdo);
    
    $userProvider->registerUser($user, $password); 

    $signin = $userProvider->getByUserNameAndPassword($userName, $password);
    $_SESSION['user'] = $signin;
    $_SESSION['user_id'] = $signin->getId();
    } catch (Exception $exception) {
            $error = $exception->getMessage();
        }
}

}   

if (isset($_SESSION['user'])) {
    header('Location: index.php');
}


require 'view/signup.php';

