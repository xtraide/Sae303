<?php

namespace App\Admin\Controller;

use Core\HTML\BootstrapForm;

class AvionController extends AppController
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Avion');
    }


    public function index()
    {
        $avions = $this->Avion->all();
        $this->render('admin.avion.index', compact('avions'));
    }


    public function edit()
    {
    }


    public function add()
    {
    }
    public function delete()
    {
    }
}
