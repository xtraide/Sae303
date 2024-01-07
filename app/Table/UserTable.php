<?php

namespace App\Table;

use App\App;

use App\Database;
use \Core\Table\Table;


class UserTable extends Table
{
    public $civilite;
    public $nom;
    public $prenom;
    public $_date;
    public $situation_familiale;
    public $date_situation_familiale;
    public $dateFin_situation_familiale;
    public $email;
    public $numero;
    public $nb_a_charge;
    public $activite;
    public $role;
}
