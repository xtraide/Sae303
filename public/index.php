<?php
define("ROOT", dirname(__DIR__));

require ROOT . '/App/App.php';

App::Load();

$app = App::getInstance();


if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "index";
}


ob_start();
if ($page == "index") {
    require ROOT . "/Views/User/Index.php";
}
$content = ob_get_clean();
require ROOT . '/Views/Template/Default.php';
