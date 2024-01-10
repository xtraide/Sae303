<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;


class ReservationController extends \App\Controller\AppController
{

    protected $Reservation;

    public function __construct()
    {
        parent::__construct();
        $this->Reservation = $this->loadModel('reservation');
    }

    public function index()
    {
        $Reservations = $this->Reservation->all();
        $this->render('admin.reservation.index', compact('Reservations'));
    }

    public function edit()
    {
        $errorMessage = '';
        if ($_POST) {
            try {
                $this->validateForm($_POST);
                var_dump($_POST);
                $result = $this->Reservation->update($_GET['id'], $_POST);
                return $this->index();
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
            }
        }

        $Reservation = $this->Reservation->find($_GET['id']);
        $Reservation->Pilote = $Reservation->prenom_pilote . " " . $Reservation->nom_pilote;
        $Reservation->User = $Reservation->user_prenom . " " . $Reservation->user_nom;

        $avions = $this->loadModel('avion')->extract('id', 'modele');

        $pilotes_model = $this->loadModel('pilote')->all();
        foreach ($pilotes_model as $pilote) {
            $pilotes[$pilote->id] = $pilote->nom . " " . $pilote->prenom;
        }

        $users_model = $this->loadModel('user')->all();
        foreach ($users_model as $user) {
            $users[$user->id] = $user->nom . " " . $user->prenom;
        }


        $form = new BootstrapForm($Reservation);

        $this->render('admin.reservation.edit', compact('form', 'avions', 'pilotes', 'users', 'errorMessage'));
    }

    public function add()
    {
        $errorMessage = '';
        if ($_POST) {
            try {
                $this->validateForm($_POST);
                $result = $this->Reservation->create($_POST);
                return $this->index();
            } catch (\Exception $e) {
                $errorMessage = $e->getMessage();
            }
        }

        $form = new BootstrapForm($_POST);
        $this->render('admin.Reservation.edit', compact('form', 'errorMessage'));
    }

    public function delete()
    {
        if (!empty($_POST)) {
            $result = $this->Reservation->delete($_POST['id']);
        }
        return $this->index();
    }
}
