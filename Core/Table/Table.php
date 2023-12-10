<?php

namespace Core\Table;

use Core\Database;

class Table
{
    private static $prefix = "ntrhndmam_";
    protected  $table;
    protected  $database;
    /* 
     recuperer le nom de la table dinamiquement quand on instancie la classe

    
    */
    public  function __construct(Database $db)
    {

        $this->database = $db;
        if (!$this->table) {
            $class_name = explode(DIRECTORY_SEPARATOR, get_class($this));
            $class_name = str_replace('Table', '', $class_name);
            $this->table = self::$prefix . strtolower(end($class_name));
        }
    }

    public  function all()
    {
        return $this->query("SELECT * FROM  " . $this->table);
    }


    public function __get($name)
    {
        $method = 'get' . ucfirst($name);
        if (method_exists($this, $method)) {
            return $this->$method();
        }
        return null;
    }
    /**
     * Recupere le nom de ligne 
     * @return Array
     */
    public function count()
    {
        return  $this->query("SELECT COUNT(*) FROM " . $this->table)[0]->count;
    }

    //delete function


    public function delete($id)
    {
        return $this->query("DELETE FROM " . $this->table . " WHERE id = :id;", ['id' => $id]);
    }
    //insert function

    //update function

    //find function
    public  function find($id)
    {
        return  $this->query("SELECT * FROM  " . $this->table . " WHERE id = :id;", ['id' => $id]);
    }
    /**
     * choisie la methode de recherche 
     * query = pas de parramètre
     * prepare = avec parametre
     * @param string $sql query
     * @param array $params parametres
     * @param string $one si on veut recuperer un seul element
     * @return array
     */
    public function query($sql, $parrams = [], $one = null)
    {
        if ($parrams) {

            return $this->database->prepare($sql, $parrams,  str_replace(
                'Table',
                'Entity',
                get_class($this),
                $one
            ));
        } else {

            return $this->database->query(
                $sql,
                str_replace(
                    'Table',
                    'Entity',
                    get_class($this),
                    $one
                )
            );
        }
    }
}
