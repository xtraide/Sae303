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
    public function dashboard()
    {
        $this->Reservation = $this->loadModel('reservation');
        $result = $this->Reservation->query("SELECT count() as nb FROM reservation WHERE ");
        $this->render('admin.main.dashboard');
    }
}
