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

    public $id;
    public $_date;
    public $id_1;
    public $id_2;
    public $id_3;
}
