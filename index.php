<?php
require_once 'model/UserProvider.php';
require_once 'model/TaskProvider.php';
require_once 'errorHandler.php';
require_once 'Logger.php';

$pdo = require 'db.php';

try {
    session_start();

$controller = $_GET['controller'] ?? 'home';
$routes = require 'routes.php';

require_once $routes[$controller];

} catch (Throwable $error) {
    die('Сервис временно недоступен. Приносим извинения');
}