<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class AvionController extends \App\Controller\AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Reservation');
    }


    public function index()
    {
        $avions = $this->Reservation->all();
        $this->render('admin.avion.index', compact('avions'));
    }


    public function edit()
    {
        $table = $this->Reservation;
        if (!empty($_POST)) {
            $result = $table->update($_GET['id'], [
                'modele' => $_POST['modele']
            ]);

            if ($result) {
?>
                <div class="alert alert-success">La reservation a bien été modifié</div>
            <?php
            }
        }
        $post = $table->find($_GET['id']);

        $form = new \Core\HTML\BootstrapForm($post);
        $this->render('admin.reservation.edit', compact('form'));
    }


    public function add()
    {
        $table = $this->Reservation;
        if (!empty($_POST)) {
            $result = $table->create([
                'modele' => $_POST['modele']
            ]);

            if ($result) {
            ?>
                <div class="alert alert-success">L'reservation a bien été ajouter</div>
<?php
            }
        }

        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('admin.reservation.edit', compact('form'));
    }
    public function delete()
    {
        if (!empty($_POST)) {
            $this->Reservation->delete($_POST['id']);
            return $this->index();
        }
    }
}
