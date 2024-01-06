<?php

namespace App\Controller;

use Core\HTML\BootstrapForm;

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
        $this->render('main.index', compact('avions'));
    }
    function forfait()
    {
        $form = new BootstrapForm($_POST);
        $this->render('main.forfait', compact('form', 'error'));
    }
}
