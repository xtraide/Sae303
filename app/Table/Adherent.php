<?php

namespace App\Table;

use app\Database;

class Adherent
{
    public function count()
    {
        $sql = "SELECT COUNT(*) FROM adherents";

        $db = new Database('test');

        $data = $db->prepare($sql, [], "App\\Table\\Adherent");
        return $data[0]->count;
    }
    //getter function
    //setters function 
    //delete function
    //insert function
    //update function
    //find function

}
