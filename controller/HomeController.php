<?php

$pageHeader = "Добро пожаловать!";


$userName = null;
if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $userName = $user->getUserName();
}

require 'view/home.php';