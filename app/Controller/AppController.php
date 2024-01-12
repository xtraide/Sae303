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

    protected function deleteImg($img)
    {
        if (file_exists($img)) {

            unlink($img);
        } else {
            throw new \Exception("Le fichier n'existe pas");
        }
    }

    protected function uploadImage($inputName, $targetDirectory)
    {
        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory);
        }

        $file_name = $_FILES[$inputName]['name'];
        $file_size = $_FILES[$inputName]['size'];
        $file_tmp = $_FILES[$inputName]['tmp_name'];
        $file_type = $_FILES[$inputName]['type'];
        $file_error = $_FILES[$inputName]['error'];
        $file_unique_name = uniqid() . "_" . $file_name;

        $file_parts = explode('.', $file_name);
        $file_ext = strtolower(end($file_parts));

        $extensions = array("jpeg", "jpg", "png");

        $errors = [];
        if (empty($file_name)) {
            throw new \Exception("Vous devez choisir une image");
        } elseif (in_array($file_ext, $extensions) === false) {
            $errors[] = "le format de l'image doit être en jpeg, jpg ou png";
        } elseif ($file_size > 20097152) {
            $errors[] = 'la taille de l\'image ne doit pas dépasser 20MB';
        } elseif ($file_error !== UPLOAD_ERR_OK) {
            $errors[] = 'Erreur de telechargement : <br> code erreur  ' . $file_error;
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, $targetDirectory . $file_unique_name);
            return $file_unique_name;
        } else {
            throw new \Exception(implode(', ', $errors));
        }
    }
}
