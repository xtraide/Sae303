<?php

use Core\Auth\DatabaseAuth;

define("ROOT", dirname(__DIR__));

require ROOT . '/App/App.php';

App::Load();

$app = App::getInstance();


if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "index";
}

$auth = new DatabaseAuth($app->getDatabase());
/* A SUPRIMER 

if (!$auth->logged()) {
    $app->forbidden();
}*/

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
    case "avion.edit":
        $app->setTitle("Editer un avion");
        require ROOT . "/Views/Staff/Avion/Edit.php";
        break;
    case "avion.add":
        $app->setTitle("Editer un avion");
        require ROOT . "/Views/Staff/Avion/Add.php";
        break;
    default:
        $app->setTitle("Page non trouvée");
        require ROOT . "/Views/Staff/Index.php";
        break;
}
$content = ob_get_clean();

require ROOT . '/Views/Template/Default.php';
