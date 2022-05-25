<?php

require_once 'model/UserProvider.php';

$error = null;
if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $userName, 'password' => $password] = $_POST;

    $userProvider = new UserProvider();
    $user = $userProvider->getByUserNameAndPassword($userName, $password);

if ($user === null) {
    $error = 'Пользователь не найден';
} else {
    $_SESSION['user'] = $user;
}
}
if (isset($_SESSION['user'])) {
    header('Location: index.php');
}

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['user']);
    header('Location: /');
}

require_once 'view/signin.php';