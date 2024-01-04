<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;
use App;

class PiloteController extends \App\Controller\AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Pilote');
    }


    public function index()
    {
        $pilotes = $this->Pilote->all();
        $this->render('admin.pilote.index', compact('pilotes'));
    }


    public function edit()
    {
        $table = $this->Pilote;
        if (!empty($_POST)) {
            $result = $table->update($_GET['id'], [
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'civilite' => $_POST['civilite'],
                'email' => $_POST['email'],
            ]);

            if ($result) {
?>
                <div class="alert alert-success">L'pilote a bien été modifié</div>
            <?php
            }
        }
        $post = $table->find($_GET['id']);

        $form = new \Core\HTML\BootstrapForm($post);
        $this->render('admin.pilote.edit', compact('form'));
    }


    public function add()
    {
        $table = $this->Pilote;
        if (!empty($_POST)) {
            $result = $table->create([
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'civilite' => $_POST['civilite'],
                'email' => $_POST['email']
            ]);

            if ($result) {
            ?>
                <div class="alert alert-success">L'pilote a bien été ajouter</div>
<?php
            }
        }

        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('admin.pilote.edit', compact('form'));
    }

    public function delete()
    {
        if (!empty($_POST)) {
            $this->Pilote->delete($_POST['id']);
            return $this->index();
        }
    }
}
