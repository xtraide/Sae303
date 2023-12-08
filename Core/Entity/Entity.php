<?php

namespace Core\Entity;

class Entity
{
    /**
     * Recuperer le nom de la methode de recherche 
     */
    public function __get($name)
    {
        $methode = 'get' . ucfirst($name);
        $this->$name = $this->$methode();
        return $this->name;
    }
}
