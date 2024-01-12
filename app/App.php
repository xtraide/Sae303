<?php


//Load Composer's autoloader

use  Core\Database;
use \Core\Config;
// class factory
class App
{

    private static $instance;
    private static $database;
    public  $title = "SAE 303";

    /**
     * Cree une instance de l'app 
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new App();
        }
        return self::$instance;
    }

    /**
     * Fonction pour load les partie necessaire a l'app
     */
    public static function Load()
    {
        session_start();
        require ROOT . "/App/Autoloader.php";
        App\Autoloader::register();
        require ROOT . "/Core/Autoloader.php";
        Core\Autoloader::register();
        require ROOT . "/vendor/autoload.php";
    }

    /**
     * Factory method to create a new instance
     * $c = App::getInstance();
     * $c->getTable('table');
     * @param string $name the name of the table
     * @return class(Database)
     */
    public function getTable($name)
    {
        $class_name = '\\App\\Table\\' . ucfirst($name) . "Table";
        return new $class_name(self::getDatabase());
    }

    /**
     * Cree/recupere une instance de la bdd
     * @return Database l'instance de la db
     */
    public function getDatabase()
    {
        if (!self::$database) {
            $config = Config::getInstance(ROOT . '/Config/Config.php');
            return new Database(
                $config->get('DB_NAME'),
                $config->get('DB_USER'),
                $config->get('DB_PASS'),
                $config->get('DB_HOST'),
                $config->get('DB_PREFIX')
            );
        }
        return $this->database;
    }



    /**
     * Renvoie le titre pour cette page 
     * @return string $title le titre de la page
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set le titre de la page 
     * @param string $title le titre de la page
     * @return string $title 
     */
    public  function setTitle($title)
    {
        $this->title = $title;
    }
    /**
     * Renvoie une page d'acces interdit
     */
}
