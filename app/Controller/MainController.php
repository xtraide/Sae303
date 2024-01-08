<?php

namespace App\Controller;

use Core\HTML\BootstrapForm;

class MainController extends AppController
{
    // Constructor function that initializes the MainController class and loads the 'Avion' model
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Avion');
    }

    // Function that handles the index route. It fetches all 'Avion' records and renders the 'main.index' view with these records
    public function index()
    {
        $avions = $this->Avion->all();
        $this->render('main.index', compact('avions'));
    }

    // Function that handles the 'forfait' route. It creates a new BootstrapForm instance with the POST data and renders the 'main.forfait' view with this form
    public function forfait()
    {
        $form = new BootstrapForm($_POST);
        $this->render('main.forfait', compact('form'));
    }

    // Function that handles the 'aerodrome' route. It simply renders the 'main.aerodrome' view
    public function aerodrome()
    {
        $this->render('main.aerodrome');
    }
    public function reservation()
    {
        $error = '';
        $form = new BootstrapForm($_POST);
        $this->render('main.reservation', compact('form', 'error'));
    }

    public function condition()
    {
        $error = '';
        $form = new BootstrapForm($_POST);
        $this->render('main.condition');
    }
}
