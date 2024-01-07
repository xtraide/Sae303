<?php

use Core\Auth\DatabaseAuth;
use Core\Router\Router;

define("ROOT", dirname(__DIR__));

require ROOT . '/App/App.php';

App::Load();
$db = App::getInstance()->getDatabase(); // Get the database
$dbAuth = new DatabaseAuth($db); // Instantiate DatabaseAuth

$router = new Router($dbAuth); // Pass DatabaseAuth to the router

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "main.index";
}

$router->route($page); // Use the router to route the request