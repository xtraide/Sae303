<?php

namespace App\Table;

use App\App;

class Table
{
    protected static $table;
    /* 
     recuperer le nom de la table dinamiquement quand on instancie la classe

    
    */
    public static function getTable()
    {
        if (!self::$table) {
            $class_name = explode("//", get_called_class());
            self::$table = strtolower(end($class_name));
        }
        return self::$table;
    }

    public static function all()
    {
        return App::getDatabase()->query("SELECT * FROM  " . self::getTable() . "", null, get_called_class());
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
    //delete function
    //insert function²  
    //update function
    //find function
}
