<?php

namespace App\Table;


use \Core\Table\Table;

class AvionTable extends Table
{
    public $id_av;
    public $modele;


    //get image name 
    public function getImageName()
    {
        //return $this->image_name;
    }
}
