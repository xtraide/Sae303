<?php

namespace App\Table;

use App\App;

use App\Database;

class Adherent extends Table
{
    public $id_ad;
    public $civilite;
    public $nom;
    public $prenom;
    public $_date;
    public $adresse;
    public $situation_familiale;
    public $date_situation_familiale;
    public $dateFin__situation_familiale;
    public $email;
    public $numero;
    public $nb_a_charge;
    public $activite;
    public $token;
    public $verified;
    public $mdp;



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
