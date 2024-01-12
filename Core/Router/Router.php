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
            $parts = explode('.', $page);
            if (count($parts) < 2) {
                throw new \Exception('Page introuvable');
            }

            $isAdmin = $parts[0] === 'admin';
            if ($isAdmin && !$this->dbAuth->isAdmin()) {
                throw new \Exception('Page introuvable');
            }
            if ($isAdmin) {
                $controllerName = $parts[1];
                $action = $parts[2];
            } else {
                $controllerName = $parts[0];
                $action = $parts[1];
            }


            $controllerClass = '\App\Controller' . ($isAdmin ? '\Admin' : '') . '\\' . ucfirst($controllerName) . 'Controller';

            if (!class_exists($controllerClass) || !method_exists($controllerClass, $action)) {
                throw new \Exception('Page introuvable');
            }
            if ($controllerClass == '\App\Controller\UserController') {
                $controller = new $controllerClass($this->dbAuth);
            } else {
                $controller = new $controllerClass();
            }
            $controller->$action();
            return;
        } catch (\Exception) {
            $controller = new \App\Controller\MainController();
            $controller->notfound();
        }
    }
}
