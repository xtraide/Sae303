<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class AdherentController extends \App\Controller\AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Adherent');
    }


    public function index()
    {
        $avions = $this->Adherent->all();
        $this->render('admin.avion.index', compact('avions'));
    }


    public function edit()
    {

        $table = $this->Adherent;
        if (!empty($_POST)) {
            $result = $table->update($_GET['id'], [
                'civilite' => $_POST['civilite'],
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                '_date' => $_POST['_date'],
                'situation_familiale' => $_POST['situation_familiale'],
                'date_situation_familiale' => $_POST['date_situation_familiale'],
                'dateFin_situation_familiale' => $_POST['dateFin_situation_familiale'],
                'email' => $_POST['email'],
                'numero' => $_POST['numero'],
                'nb_a_charge' => $_POST['nb_a_charge'],
                'activite' => $_POST['activite'],
                'role' => $_POST['role']
            ]);

            if ($result) {
?>
                <div class="alert alert-success">L'adherent a bien été modifié</div>
            <?php
            }
        }
        $post = $table->find($_GET['id']);
        var_dump($post);
        $form = new \Core\HTML\BootstrapForm($post);
        $this->render('admin.avion.edit', compact('form'));
    }


    public function add()
    {

        $table = $this->Adherent;
        if (!empty($_POST)) {
            $result = $table->create([
                'civilite' => $_POST['civilite'],
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                '_date' => $_POST['_date'],
                'situation_familiale' => $_POST['situation_familiale'],
                'date_situation_familiale' => $_POST['date_situation_familiale'],
                'dateFin_situation_familiale' => $_POST['dateFin_situation_familiale'],
                'email' => $_POST['email'],
                'numero' => $_POST['numero'],
                'nb_a_charge' => $_POST['nb_a_charge'],
                'activite' => $_POST['activite'],
                'role' => $_POST['role']
            ]);



            if ($result) {
            ?>
                <div class="alert alert-success">L'adherent a bien été ajouter</div>
<?php
            }
        }

        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('admin.adherent.edit', compact('form'));
    }
    public function delete()
    {
        $table = App::getInstance()->getTable('adherent');
        if (!empty($_POST)) {
            $result = $table->delete($_POST['id']);
        }
        header('Location: Staff.php?page=admin.adherent.index');
    }
}
