<?php



use  Core\Database;
use \Core\Config;
// class factory
class App
{
    private static $instance;
    private static $database;
    private  $title = "SAE 303";

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new App();
        }
        return self::$instance;
    }
    public static function Load()
    {
        session_start();
        require ROOT . "/App/Autoloader.php";
        App\Autoloader::register();
        require ROOT . "/Core/Autoloader.php";
        Core\Autoloader::register();
    }


    /* Factory method to create a new instance
    
    $c = App::getInstance();
    $c->getTable('table');
    */
    public  function getTable($name)
    {
        $class_name = '\\App\\Table\\' . ucfirst($name) . "Table";

        return new  $class_name(self::getDatabase());
    }



    public  function getDatabase()
    {
        if (!self::$database) {
            $config = Config::getInstance(ROOT . '/Config/Config.php');

            return new Database(
                $config->get('DB_NAME'),
                $config->get('DB_USER'),
                $config->get('DB_PASS'),
                $config->get('DB_HOST')
            );
        }
        return $this->database;
    }

    public static function notFound()
    {
        header('HTTP/1.1 404 Not Found');
        header('location: App/Views/User/404.php');
    }

    public  function getTitle()
    {
        return $this->title;
    }

    public  function setTitle($title)
    {
        $this->title = $title;
    }
}
