<?php

/**
 * Class pour representer l'entity dans la base de donnée 
 * pour le renvoyer dans la query de Core\table
 * https://www.youtube.com/watch?v=Cklp2KGAF7A&list=PLjwdMgw5TTLVDKy8ikf5Df5fnMqY-ec16&index=21
 */

namespace App\Entity;

use Core\Entity\Entity;

class AdherentEntity extends Entity
{

    /**
     * Recupere L'url
     * @return string Url a donne
     */
    public function getUrl()
    {
        return "index.php?page=Adherent&id=" . $this->id;
    }
}
