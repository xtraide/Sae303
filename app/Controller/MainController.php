<?php

namespace App\Controller;


class MainController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Avion');
    }
    public function index()
    {
        $avions = $this->Avion->all();
        $this->render('error.404', compact('avions'));
    }
}
