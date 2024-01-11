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
        return  App::getInstance()->getTable($model_name);
    }

    protected function uploadImage($inputName, $targetDirectory)
    {

        $file_name = $_FILES[$inputName]['name'];
        $file_size = $_FILES[$inputName]['size'];
        $file_tmp = $_FILES[$inputName]['tmp_name'];
        $file_type = $_FILES[$inputName]['type'];
        $file_error = $_FILES[$inputName]['error'];

        $file_parts = explode('.', $file_name);
        $file_ext = strtolower(end($file_parts));

        $extensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $extensions) === false) {
            $errors = "extension not allowed, please choose a JPEG or PNG file.";
        }

        if ($file_size > 2097152) {
            $errors = 'File size must be exactly 2 MB';
        }
        if (empty($file_error) == false) {
            $errors = 'Error uploading file';
        }
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, $targetDirectory . $file_name);
            return $file_name;
        } else {
            return throw new \Exception($errors);
        }
    }
}
