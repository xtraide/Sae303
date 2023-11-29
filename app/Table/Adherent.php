<?php

namespace App\Table;

use App\App;

use App\Database;

class Adherent extends Table
{
    public function count()
    {
        $sql = "SELECT COUNT(*) FROM adherents";

        $db = new Database('ntrhndmam_acf2l');

        $data = $db->prepare($sql, [], "App\\Table\\Adherent");
        return $data[0]->count;
    }
    public static function getAdherents()
    {
        return App::getDatabase()->query("SELECT * FROM adherents", __CLASS__);
    }
    //getter function
    //setters function 


}
