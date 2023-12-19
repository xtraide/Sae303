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

    case "Index":
        $app->setTitle("Acceuil");
        require ROOT . "/Views/User/Index.php";
        break;

    case "Login":
        $app->setTitle("Connexion");
        require ROOT . "/Views/User/Login.php";
        break;

    case "Register":
        $app->setTitle("Inscription");
        require ROOT . "/Views/User/Register.php";
        break;

    case "Logou":
        $app->setTitle("Déconnexion");
        require ROOT . "/Views/User/Logout.php";
        break;

    case "Profile":
        $app->setTitle("Profil");
        require ROOT . "/Views/User/Profile.php";
        break;

    default:
        $app->setTitle("Page non trouvée");
        require ROOT . "/Views/User/Index.php";
        break;
}
$content = ob_get_clean();
require ROOT . '/Views/Template/Default.php';
