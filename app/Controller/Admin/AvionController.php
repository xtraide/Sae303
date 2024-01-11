<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use App\Model\Avion;

class AvionController extends \App\Controller\AppController
{
    protected $Avion;

    public function __construct()
    {
        parent::__construct();
        $this->Avion = $this->loadModel('Avion');
    }

    public function index()
    {
        $avions = $this->Avion->all();
        $this->render('admin.avion.index', compact('avions'));
    }

    public function edit()
    {

        $errorMessage = '';
        if ($_POST) {
            try {
                $this->validateForm($_POST);

                $_POST['img'] = $this->uploadImage('img', '\public\assets\ressources\avion');
                var_dump($_POST);

                $result = $this->Avion->update($_GET['id'], $_POST);
                return $this->index();
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
            }
        }

        $avion = $this->Avion->find($_GET['id']);
        $form = new BootstrapForm($avion);
        $this->render('admin.avion.edit', compact('form', 'errorMessage'));
    }

    public function add()
    {
        $errorMessage = '';
        if ($_POST) {
            try {
                $this->validateForm($_POST);
                $_POST['img'] = $this->uploadImage('img', 'assets\ressources\avion\\');
                $result = $this->Avion->create($_POST);
                return $this->index();
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
            }
        }


        $form = new BootstrapForm($_POST);
        $this->render('admin.avion.edit', compact('form', 'errorMessage'));
    }

    public function delete()
    {
        if (!empty($_POST)) {
            $result = $this->Avion->delete($_POST['id']);
        }
        return $this->index();
    }
}
