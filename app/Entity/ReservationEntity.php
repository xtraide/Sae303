<?php

/**
 * Class pour representer l'entity dans la base de donnée 
 * pour le renvoyer dans la query de Core\table
 * https://www.youtube.com/watch?v=Cklp2KGAF7A&list=PLjwdMgw5TTLVDKy8ikf5Df5fnMqY-ec16&index=21
 */

namespace App\Entity;

use Core\Entity\Entity;

class ReservationEntity extends Entity
{
    public $id_reservation;
    public $_date;
    public $horraire;

    public $Id_1;
    public $user_nom;
    public $user_prenom;

    public $Id_3;
    public $avion_modele;

    public $Id_2;
    public $nom_pilote;
    public $prenom_pilote;
}
