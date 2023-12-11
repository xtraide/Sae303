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

switch ($page) {
    case "index":
        $app->setTitle("Acceuil");
        require ROOT . "/Views/Staff/Index.php";
        break;

    case "dashboard":
        $app->setTitle("Tableau de bord");
        require ROOT . "/Views/Staff/Dashboard.php";
        break;

    default:
        $app->setTitle("Page non trouvée");
        require ROOT . "/Views/Staff/Index.php";
        break;
}
$content = ob_get_clean();

require ROOT . '/Views/Template/Default.php';
