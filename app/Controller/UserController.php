<?php

namespace App\Controller;

use Core\Auth\DatabaseAuth;
use Core\HTML\BootstrapForm;
use \App;


class UserController extends AppController
{




    public function login()
    {
        $error = false;
        $form = new BootstrapForm($_POST);
        if (!empty($_POST)) {
            $auth = new DatabaseAuth(App::getInstance()->getDatabase());

            if ($auth->login($_POST['email'], $_POST['password'])) {

                header('Location: ?page=main.index');
            } else {
                $error = true;
            }
        }
        $this->render('user.login', compact('form', 'error'));
    }

    public function logout()
    {
        $auth = new DatabaseAuth(App::getInstance()->getDatabase());
        $auth->logout();
        header('Location: ?page=main.index');
    }

    public function register()
    {
        $error = false;
        $form = new BootstrapForm($_POST);
        if (!empty($_POST)) {
            $auth = new DatabaseAuth(App::getInstance()->getDatabase());
            if ($auth->register($_POST['email'], $_POST['password'])) {
                $error = false;
            } else {
                $error = true;
            }
        }
        $this->render('user.register', compact('form', 'error'));
    }

    public function profil()
    {
        $form = new BootstrapForm($_POST);

        $this->render('user.profil',  compact('form'));
    }
}
