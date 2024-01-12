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
                    $controller_name = '\App\Controller\Admin\\' . ucfirst($page[1]) . 'Controller';
                    $action = $page[2];
                } else {
                    throw new \Exception('Page introuvable');
                }
            } elseif ($page[0] && $page[1]) {
                $controller_name = '\App\Controller\\' . ucfirst($page[0]) . 'Controller';
                $action = $page[1];
            } else {
                throw new \Exception('Page introuvable');
            }



            if (method_exists($controller_name, $action)) {

                if ($controller_name == '\App\Controller\UserController') {
                    $controller = new $controller_name($this->dbAuth);
                } else {
                    $controller = new $controller_name();
                }
                $controller->$action();
            } else {
                throw new \Exception('Page introuvable');
            }
        } catch (\Exception $e) {

            $controller = new \App\Controller\MainController();
            $controller->notfound();
        }
    }
}
