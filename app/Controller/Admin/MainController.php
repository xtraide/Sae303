<?php

namespace App\Controller\Admin;


class MainController extends \App\Controller\AppController
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
}
