<?php

namespace Core;

/**
 *  CREATION D'UN SINGLETON 
 * https://www.youtube.com/watch?v=eCL_xXzsxeI&list=PLjwdMgw5TTLVDKy8ikf5Df5fnMqY-ec16&index=21
 *  singleton =  class instancier une seule fois pour les class qui bougeron pas 
 */
class Config
{
    private $config = [];
    private static $_instance;
    // recuperation des configuraitons 

    public function __construct($file)
    {
        $this->config = require($file);
    }
    /**
     * Recupere l'instance de la config 
     * @param string $file le chemin du fichier de configuration  avec les user,pass...
     * @return instance 
     */
    public static function getInstance($file)
    {
        if (!self::$_instance) {
            self::$_instance = new Config($file);
        }
        return self::$_instance;
    }

    /**
     * Recupere la clee => value du tableaux de config
     * @param string $key nom de la clee a recupere du tableaux      DB_NAME, DB_USER, DB_PASS, DB_HOST
     */
    public function get($key)
    {
        if (!array_key_exists($key, $this->config)) {
            return null;
        }
        return $this->config[$key];
    }
}
