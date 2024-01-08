<?php

namespace Core\Controller;

use App;
use Core\Auth\DatabaseAuth;

class Controller
{
    protected $viewPath;
    protected $template;
    /**
     * Permet de rendre(afficher) une vue $content use in template 
     * @param string $view Fichier à afficher
     * @param array $variables Variables à passer à la vue
     * @return void return la page demandée 
     */
    protected function render($view, $variables = [])
    { /* a supprimer */
        $auth = new DatabaseAuth(App::getInstance()->getDatabase());
        $logged = $auth->logged();

        $admin = $auth->isAdmin();

        /** */
        ob_start();
        extract($variables);
        require($this->viewPath . str_replace('.', '/', $view) . '.php');
        $content = ob_get_clean();
        require($this->viewPath . 'template/' . $this->template . '.php');
    }

    protected function forbidden()
    {
        header('HTTP/1.0 403 Forbidden');
        die('Acces interdit');
    }

    protected function notFound()
    {
        header('HTTP/1.0 404 Not Found');
        die('Page introuvable');
    }
    protected function validateForm($post)
    {

        foreach ($post as $i) {
            if (empty($i)) {
                throw new \Exception('remplissez tous les champs');
            }
        }
        if (!empty($_POST['email'])) {
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                throw new \Exception('email invalide');
            }
        }
    }
    public function validadd($champ, $action)
    {
        if ($action == "add") {
            $action = "ajouté";
        } else if ($action == "edit") {
            $action = "modifié";
        } else if ($action == "delete") {
            $action = "supprimé";
        }

        return "<div class='alert alert-success'>" . $champ . " a bien été " . $action . "</div>";
    }
}
