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
    public $reservation_date;
    public $reservation_horraire;

    public $id_user;
    public $user_nom;
    public $user_prenom;

    public $id_avion;
    public $avion_modele;

    public $id_pilote;
    public $nom_pilote;
    public $prenom_pilote;

    public $User;
    public $Pilote;
}
