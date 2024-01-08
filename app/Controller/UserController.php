<?php

namespace App\Controller;

use Core\Auth\DatabaseAuth;
use Core\HTML\BootstrapForm;
use \App;


class UserController extends AppController
{
    private $auth;

    public function __construct(DatabaseAuth $auth)
    {
        parent::__construct();
        $this->auth = $auth;
    }

    public function login()
    {
        $form = new BootstrapForm($_POST);

        $errorMessage = '';
        if ($_POST) {
            try {
                $this->validateForm($_POST);
                if ($this->auth->login($_POST['email'], $_POST['password'])) {
                    header('Location: ?page=main.index');
                    exit;
                } else {
                    throw new \Exception('email ou mot de passe incorrect');
                }
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
            }
        }


        $this->render('user.login', compact('form', 'errorMessage'));
    }

    public function logout()
    {
        $this->auth->logout();
        header('Location: ?page=main.index');
    }

    public function register()
    {
        $form = new BootstrapForm($_POST);
        $errorMessage = '';
        if ($_POST) {
            try {
                $this->validateForm($_POST);
                if ($this->auth->register($_POST['email'], $_POST['password'])) {
                    header('Location: ?page=main.index');
                    exit;
                } else {
                    throw new \Exception('erreur lors de l\'inscription');
                }
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
            }
        }

        $this->render('user.register', compact('form', 'errorMessage'));
    }

    public function profil()
    {
        $form = new BootstrapForm($_POST);
        $this->render('user.profil',  compact('form'));
    }
    public function reservation()
    {
        $error = '';
        $form = new BootstrapForm($_POST);
        $this->render('user.reservation', compact('form', 'errorMessage'));
    }
}
