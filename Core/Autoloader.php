<?php

namespace Core;


class Autoloader
{
    /**
     * Enregistre un appel a l'autoload
     */
    static public function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }


    /**
     *  Va chercher les class/ficher donc le site a besoin 
     * @param string  $class class a charger
     */
    static function autoload($class)
    {
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {
            $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);

            require __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';
        }
    }
}
