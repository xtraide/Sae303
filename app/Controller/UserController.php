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
        $error = '';
        if ($_POST) {
            try {
                $this->validateForm();
                if ($this->auth->login($_POST['email'], $_POST['password'])) {
                    header('Location: ?page=main.index');
                    exit;
                } else {
                    throw new \Exception('email ou mot de passe incorrect');
                }
            } catch (\Exception $e) {
                $error = $e->getMessage();
            }
        }
        $this->render('user.login', compact('form', 'error'));
    }

    public function logout()
    {
        $this->auth->logout();
        header('Location: ?page=main.index');
    }

    public function register()
    {
        $form = new BootstrapForm($_POST);
        $error = '';
        if ($_POST) {
            try {
                $this->validateForm();
                if ($this->auth->register($_POST['email'], $_POST['password'])) {
                    header('Location: ?page=main.index');
                    exit;
                } else {
                    throw new \Exception('erreur lors de l\'inscription');
                }
            } catch (\Exception $e) {
                $error = $e->getMessage();
            }
        }
        $this->render('user.register', compact('form', 'error'));
    }

    public function profil()
    {
        $form = new BootstrapForm($_POST);
        $this->render('user.profil',  compact('form'));
    }

    public function wrongCredentials()
    {
        return '
        <div class="alert alert-danger z-3" role="alert">
            Adresse mail ou mot de passe incorrect
        </div>';
    }

    public function wrongEmail()
    {
        return '
        <div class="alert alert-danger z-3" role="alert">
            Adresse mail incorrect ou invalide
        </div>';
    }

    public function noCredentials()
    {
        return '
        <div class="alert alert-danger z-3 mt-2" role="alert">
            Veuillez remplir tous les champs
        </div>';
    }

    private function validateForm()
    {

        if (empty($_POST['email']) || empty($_POST['password'])) {
            throw new \Exception('remplissez tous les champs');
        }
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            throw new \Exception('email invalide');
        }
    }
}
