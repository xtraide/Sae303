<?php

namespace App\Controller;

use Core\HTML\BootstrapForm;

class MainController extends AppController
{
    protected $Avion;
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Avion');
    }

    public function index()
    {
        $avions = $this->Avion->all();
        $this->render('main.index', compact('avions'));
    }

    public function forfait()
    {
        $form = new BootstrapForm($_POST);
        $this->render('main.forfait', compact('form'));
    }
    public function aerodrome()
    {

        $this->render('main.aerodrome');
    }
}
