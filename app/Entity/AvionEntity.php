<?php

/**
 * Class pour representer l'entity dans la base de donnée 
 * pour le renvoyer dans la query de Core\table
 * https://www.youtube.com/watch?v=Cklp2KGAF7A&list=PLjwdMgw5TTLVDKy8ikf5Df5fnMqY-ec16&index=21
 */

namespace App\Entity;

use Core\Entity\Entity;

class AvionEntity extends Entity
{
    public $id;
    public $modele;
    public $v_max;
    public $capacite;
    public $autonomie;
    public $poid;
    public $img;


    public function getImg()
    {
        return '<img src="assets/ressources/avion/' . $this->img . '" alt="image de l\'avion " width="30%" id="ulm1" style="margin: auto; display: block;">';
    }
}
