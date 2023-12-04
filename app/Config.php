<?php

namespace App;

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

    public function __construct()
    {
        $this->config = require dirname(__DIR__) . '/config/config.php';
    }

    // recuperation de l'instance  pour avoir toujour la meme instance 
    public static function getInstance()
    {
        if (!self::$_instance) {
            self::$_instance = new Config();
        }
        return self::$_instance;
    }

    //recuperation d'unne key du tableaux de config
    public function get($key)
    {
        if (!array_key_exists($key, $this->config)) {
            return null;
        }
        return $this->config[$key];
    }
}
