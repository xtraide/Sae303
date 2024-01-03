<?php

namespace App\Admin\Controller;

use Core\HTML\BootstrapForm;

class AvionController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Avion');
    }


    public function index()
    {
        $avions = $this->Avion->all();
        $this->render('admin.avion.index', compact('avions'));
    }


    public function edit()
    {
        if (!empty($_POST)) {
            $result = $this->Avion->update($_GET['id'], [
                'name' => $_POST['name'],
                'description' => $_POST['description']
            ]);
            if ($result) {
                return $this->index();
            }
        }
        $avion = $this->Avion->find($_GET['id']);
        $form = new BootstrapForm($avion);
        $this->render('admin.avion.edit', compact('form'));
    }


    public function add()
    {
        $table = $this->Avion;
        if (!empty($_POST)) {
            $result = $table->create([
                'modele' => $_POST['modele']
            ]);

            if ($result) {
?>
                <div class="alert alert-success">L'avion a bien été ajouter</div>
<?php
            }
        }

        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('admin.avion.edit', compact('form'));
    }
    public function delete()
    {
        if (!empty($_POST)) {
            $this->Avion->delete($_POST['id']);
            return $this->index();
        }
    }
}
