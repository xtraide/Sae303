<?php
define("ROOT", dirname(__DIR__));

require ROOT . '/App/App.php';

App::Load();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "main.index";
}




$page = explode('.', $page);
if ($page[0] == 'admin') {
    $controller = '\App\Controller\Admin\\' . ucfirst($page[1]) . 'Controller';
    $action = $page[2];
} else {
    $controller = '\App\Controller\\' . ucfirst($page[0]) . 'Controller';
    $action = $page[1];
}

$controller = new $controller();

$controller->$action();
