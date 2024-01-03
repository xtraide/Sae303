<?php

namespace App\Admin\Controller;


use Core\Auth\DatabaseAuth;
use \App;

class AppController extends \App\Controller\AppController
{


    public function __construct()
    {
        parent::__construct();
        $app = App::getInstance();
        $auth = new DatabaseAuth($app->getDatabase());

        if (!$auth->logged()) {
            $this->forbidden();
        }
    }
}
