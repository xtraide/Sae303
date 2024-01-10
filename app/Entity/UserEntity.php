<?php

/**
 * Class pour representer l'entity dans la base de donnée 
 * pour le renvoyer dans la query de Core\table
 * https://www.youtube.com/watch?v=Cklp2KGAF7A&list=PLjwdMgw5TTLVDKy8ikf5Df5fnMqY-ec16&index=21
 */

namespace App\Entity;

use Core\Entity\Entity;


class UserEntity extends Entity
{


    public $id;
    public $civilite;
    public $nom;
    public $prenom;
    public $_date;

    public $adresse;
    public $nb_voix;
    public $rue;
    public $code_postal;
    public $ville;


    public $situation_familiale;
    public $date_situation_familiale;
    public $dateFin_situation_familiale;

    public $email;
    public $numero;
    public $nb_a_charge;
    public $activite;
    public $role;
    public $password;
    public $token;
    public $verified;

    public function __construct()
    {
        $this->nb_voix = explode("_", $this->adresse)[0];
        $this->rue = explode("_", $this->adresse)[1];
        $this->code_postal = explode("_", $this->adresse)[2];
        $this->ville = explode("_", $this->adresse)[3];
        $this->adresse = str_replace("_", " ", $this->adresse);
    }

    /**
     * Recupere L'url
     * @return string Url a donne
     */
    public function getUrl()
    {
        return "index.php?page=Adherent&id=" . $this->id;
    }
}
