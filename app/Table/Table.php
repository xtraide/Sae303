<?php

namespace App\Table;

use App\App;

class Table
{
    protected static $prefix = "ntrhndmam_";
    protected static $table;
    protected static $database;
    /* 
     recuperer le nom de la table dinamiquement quand on instancie la classe

    
    */
    public  function __construct(\App\Database $db)
    {

        self::$database = $db;
        if (!self::$table) {
            $class_name = explode(DIRECTORY_SEPARATOR, get_called_class());
            self::$table = strtolower(end($class_name));
        }
    }

    public static function all()
    {
        return self::$database->query("SELECT * FROM  " . self::$table . "",  get_called_class());
    }


    public function __get($name)
    {
        $method = 'get' . ucfirst($name);
        if (method_exists($this, $method)) {
            return $this->$method();
        }
        return null;
    }
    public function query($sql, $params = [])
    {
        if (!$params) {
            return App::getDatabase()->prepare($sql, $params, get_called_class());
        } else {
            return App::getDatabase()->query($sql, get_called_class());
        }
    }

    public function count()
    {
        return  App::getDatabase()->prepare("SELECT COUNT(*) FROM " . self::$table, [], get_called_class())[0]->count;
    }

    //delete function


    public function delete($id)
    {
        return App::getDatabase()->prepare("DELETE FROM " . self::$table . " WHERE id = :id;", ['id' => $id], get_called_class());
    }
    //insert function

    //update function

    //find function
    public static function find($id)
    {
        return App::getDatabase()->prepare("SELECT * FROM  " . self::$table . " WHERE id = :id;", ['id' => $id], get_called_class());
    }
}
