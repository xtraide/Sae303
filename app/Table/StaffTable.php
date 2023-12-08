<?php

namespace App\Table;

use \Core\Table\Table;

class StaffTable extends Table
{
    public $id_staff;
    public $nom;
    public $prenom;
    public $email;
    public $mdp;
    public $role;
    public $token;
    public $verified;
}
