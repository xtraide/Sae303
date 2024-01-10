<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use App\Model\Pilote;

class PiloteController extends \App\Controller\AppController
{
    protected $Pilote;

    public function __construct()
    {
        parent::__construct();
        $this->Pilote = $this->loadModel('Pilote');
    }

    public function index()
    {
        $Pilotes = $this->Pilote->all();
        $this->render('admin.Pilote.index', compact('Pilotes'));
    }

    public function edit()
    {
        $errorMessage = '';
        if ($_POST) {
            try {
                $this->validateForm($_POST);
                $result = $this->Pilote->update($_GET['id'], $_POST);
                return $this->index();
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
            }
        }

        $Pilote = $this->Pilote->find($_GET['id']);
        $form = new BootstrapForm($Pilote);

        $this->render('admin.Pilote.edit', compact('form', 'errorMessage'));
    }

    public function add()
    {
        $errorMessage = '';
        if ($_POST) {
            try {
                $this->validateForm($_POST);
                $result = $this->Pilote->create($_POST);
                return $this->index();
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
            }
        }

        $form = new BootstrapForm($_POST);
        $this->render('admin.Pilote.edit', compact('form', 'errorMessage'));
    }

    public function delete()
    {
        if (!empty($_POST)) {
            $result = $this->Pilote->delete($_POST['id']);
        }
        return $this->index();
    }
}
