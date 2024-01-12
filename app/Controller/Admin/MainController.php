<?php

namespace App\Controller\Admin;


class MainController extends \App\Controller\AppController
{
    protected $Avion;
    protected $Reservation;
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->render('admin.main.index');
    }

    public function analytiques()
    {
        $this->Reservation = $this->loadModel('reservation');
        $this->Avion = $this->loadModel('avion');
        $this->Pilote = $this->loadModel('pilote');
        $this->User = $this->loadModel('user');
        $Reservation = $this->Reservation->count();
        $Avion = $this->Avion->count();
        $Pilote = $this->Pilote->count();
        $User = $this->User->count();
        var_dump($User);

        $this->render('admin.main.analytiques', compact('Reservation', 'Avion', 'Pilote', 'User'));
    }
}
