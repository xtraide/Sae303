<?php

namespace App;

use App\Database;
// class factory
class App
{
    private static $instance;
    private static $database;
    private static $title = "SAE 303";

    public function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new App();
        }
        return self::$instance;
    }


    /* Factory method to create a new instance
    
    $c = App::getInstance();
    $c->getTable('table');
    */
    public  function getTable($name)
    {
        $class_name = '\\App\\Table\\' . ucfirst($name);
        return new  $class_name(self::getDatabase());
    }



    public static function getDatabase()
    {
        if (!self::$database) {
            $config = Config::getInstance();

            return new Database(
                $config->get('db_name'),
                $config->get('db_user'),
                $config->get('db_pass'),
                $config->get('db_host')
            );
        }
        return self::$database;
    }

    public static function notFound()
    {
        header('HTTP/1.1 404 Not Found');
        header('location: App/Views/User/404.php');
    }

    public static function getTitle()
    {
        return self::$title;
    }

    public static function setTitle($title)
    {
        self::$title = $title;
    }
}
