<?php

namespace Core;


class Autoloader
{

    static public function register()
    {

        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    static function autoload($class)
    {
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {
            $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            echo __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';
            require __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';
        }
    }
}
