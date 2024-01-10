<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;


class UserController extends \App\Controller\AppController
{
    protected $User;

    public function __construct()
    {
        parent::__construct();
        $this->User = $this->loadModel('User');
    }

    public function index()
    {
        $users = $this->User->all();

        $this->render('admin.user.index', compact('users'));
    }

    public function edit()
    {
        $errorMessage = '';

        if ($_POST) {
            try {
                $this->validateForm($_POST);
                $_POST['adresse'] = $_POST['nb_voix'] . "_" . $_POST['rue'] . "_" . $_POST['code_postal'] . "_" . $_POST['ville'];
                unset($_POST['nb_voix'], $_POST['rue'], $_POST['code_postal'], $_POST['ville']);

                $_POST['password'] = sha1($_POST['password']);
                $result = $this->User->update($_GET['id'], $_POST);
                return $this->index();
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
            }
        }

        $user = $this->User->find($_GET['id']);
        $form = new BootstrapForm($user);

        $this->render('admin.user.edit', compact('form', 'errorMessage'));
    }

    public function add()
    {
        $errorMessage = '';
        if ($_POST) {
            try {
                $this->validateForm($_POST);
                $_POST['adresse'] = $_POST['nb_voix'] . "_" . $_POST['rue'] . "_" . $_POST['code_postal'] . "_" . $_POST['ville'];
                unset($_POST['nb_voix'], $_POST['rue'], $_POST['code_postal'], $_POST['ville']);

                $_POST['password'] = sha1($_POST['password']);
                $result = $this->User->create($_POST);
                return $this->index();
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
            }
        }

        $form = new BootstrapForm($_POST);

        $this->render('admin.user.edit', compact('form', 'errorMessage'));
    }

    public function delete()
    {
        if (!empty($_POST)) {
            $this->User->delete($_POST['id']);
        }
        return $this->index();
    }
}
