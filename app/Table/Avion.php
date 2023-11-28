<?php

namespace App\Table;

use app\Database;

class Avion
{
    public function count()
    {
        $sql = "SELECT COUNT(*) FROM avions";
        $db = new Database('test');
        $data = $db->prepare($sql, [], "App\\Table\\Avion");
        return $data[0]->count;
    }

    //get image name 
    public function getImageName()
    {
        return $this->image_name;
    }
}
