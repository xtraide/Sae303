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
        $page = explode('.', $page);
        if ($page[0] == 'admin') {
            $controller = '\App\Controller\Admin\\' . ucfirst($page[1]) . 'Controller';
            $action = $page[2];
        } else {
            $controller = '\App\Controller\\' . ucfirst($page[0]) . 'Controller';
            $action = $page[1];
        }

        if ($controller == '\App\Controller\UserController') {
            $controller = new $controller($this->dbAuth);
        } else {
            $controller = new $controller();
        }



        $controller->$action();
    }
}
