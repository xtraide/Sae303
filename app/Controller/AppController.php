<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class AppController extends Controller
{
    protected $Avion; // Model for 'Avion' table
    protected $Pilote; // Model for 'Pilote' table
    protected $User; // Model for 'Adherent' table
    protected $Reservation; // Model for 'Reservation' table
    protected $template = 'default'; // Default template

    // Constructor function that initializes the AppController class and sets the view path
    public function __construct()
    {
        $this->viewPath = ROOT . '/app/Views/';
    }

    /**
     * Creates a variable for a model
     * 
     * @return mixed $model_name
     */
    protected function loadModel($model_name)
    {
        // Get the table instance for the model from the App and assign it to the model variable
        $this->$model_name = App::getInstance()->getTable($model_name);
    }
}
