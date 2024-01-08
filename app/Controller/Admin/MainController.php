<?php

namespace App\Controller\Admin;


class MainController extends \App\Controller\AppController
{
    protected $Avion;
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

        $this->render('admin.main.index');
    }
}
