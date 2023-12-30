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
    case "avion.delete":
        $app->setTitle("suprimer un avion");
        require ROOT . "/Views/Staff/Avion/Delete.php";
        break;
    case "avion.index":
        $app->setTitle("suprimer un avion");
        require ROOT . "/Views/Staff/Avion/Index.php";
        break;

    case "adherent.edit":
        $app->setTitle("Editer un adhérent");
        require ROOT . "/Views/Staff/Adherent/Edit.php";
        break;
    case "adherent.add":
        $app->setTitle("Editer un adhérent");
        require ROOT . "/Views/Staff/Adherent/Add.php";
        break;
    case "adherent.delete":
        $app->setTitle("suprimer un adhérent");
        require ROOT . "/Views/Staff/Adherent/Delete.php";
        break;
    case "adherent.index":
        $app->setTitle("suprimer un adhérent");
        require ROOT . "/Views/Staff/Adherent/Index.php";
        break;

    case "pilote.edit":
        $app->setTitle("Editer un pilote");
        require ROOT . "/Views/Staff/Pilote/Edit.php";
        break;
    case "pilote.add":
        $app->setTitle("Editer un pilote");
        require ROOT . "/Views/Staff/Pilote/Add.php";
        break;
    case "pilote.delete":
        $app->setTitle("suprimer un pilote");
        require ROOT . "/Views/Staff/Pilote/Delete.php";
        break;
    case "pilote.index":
        $app->setTitle("suprimer un pilote");
        require ROOT . "/Views/Staff/Pilote/Index.php";
        break;

    case "reservation.edit":
        $app->setTitle("Editer une reservation");
        require ROOT . "/Views/Staff/Reservation/Edit.php";
        break;
    case "reservation.add":
        $app->setTitle("Editer une reservation");
        require ROOT . "/Views/Staff/Reservation/Add.php";
        break;
    case "reservation.delete":
        $app->setTitle("suprimer une reservation");
        require ROOT . "/Views/Staff/Reservation/Delete.php";
        break;
    case "reservation.index":
        $app->setTitle("suprimer une reservation");
        require ROOT . "/Views/Staff/Reservation/Index.php";
        break;

    case "staff.edit":
        $app->setTitle("Editer un staff");
        require ROOT . "/Views/Staff/Staff/Edit.php";
        break;
    case "staff.add":
        $app->setTitle("Editer un staff");
        require ROOT . "/Views/Staff/Staff/Add.php";
        break;
    case "staff.delete":
        $app->setTitle("suprimer un staff");
        require ROOT . "/Views/Staff/Staff/Delete.php";
        break;
    case "staff.index":
        $app->setTitle("suprimer un staff");
        require ROOT . "/Views/Staff/Staff/Index.php";
        break;


    default:
        $app->setTitle("Page non trouvée");
        require ROOT . "/Views/Staff/Index.php";
        break;
}
$content = ob_get_clean();

require ROOT . '/Views/Template/Default.php';
