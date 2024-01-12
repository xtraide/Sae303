<?php

namespace Core\Router;

use Core\Auth\DatabaseAuth;

class Router
{
    private $dbAuth;

    public function __construct(DatabaseAuth $dbAuth)
    {
        $this->dbAuth = $dbAuth;
    }

    public function route($page)
    {
        try {
            $page = explode('.', $page);
            if ($page[0] == 'admin') {
                if ($this->dbAuth->isAdmin()) {
                    $controller = '\App\Controller\Admin\\' . ucfirst($page[1]) . 'Controller';
                    $action = $page[2];
                } else {
                    header('Location: index.php?page=main.index');
                }
            } else {
                $controller = '\App\Controller\\' . ucfirst($page[0]) . 'Controller';
                $action = $page[1];
            }

            if ($controller == '\App\Controller\UserController') {
                $controller = new $controller($this->dbAuth);
            } else {
                $controller = new $controller();
            }


            if (method_exists($controller, $action)) {
                $controller->$action();
            } else {
                throw new \Exception('');
            }
        } catch (\Exception) {

            $controller = new \App\Controller\MainController();
            $controller->notfound();
        }
    }
}
