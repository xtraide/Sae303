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
    {
        $logged = new DatabaseAuth(App::getInstance()->getDatabase());
        $logged = $logged->logged();
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
}
