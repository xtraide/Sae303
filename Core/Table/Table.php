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
        return $this->query("DELETE FROM " . $this->table . " WHERE id = ?;", [$id], true);
    }


    //find function
    public  function find($id)
    {
        return  $this->query("SELECT * FROM  " . $this->table . " WHERE id = ?;", [$id], true);
    }
    /**
     * insert un element dans la base de donnee
     * @param number $id
     * @param array $fields
     * @return boolean
     */
    public function update($id, $fields)
    {
        $sql_parts = [];
        $attributes = [];
        foreach ($fields as $champ => $value) {
            $sql_parts[] = "$champ = ?";
            $attributes[] = $value;
        }
        $attributes[] = $id;
        $sql_part = implode(', ', $sql_parts);
        return $this->query("UPDATE " . $this->table . " SET $sql_part WHERE id = ?", $attributes, true);
    }


    /**
     * insert un element dans la base de donnee

     * @param array $fields
     * @return boolean
     */
    public function create($fields)
    {
        $sql_parts = [];
        $attributes = [];
        foreach ($fields as $champ => $value) {
            $sql_parts[] = "$champ = ?";
            $attributes[] = $value;
        }
        $sql_part = implode(', ', $sql_parts);
        return $this->query("INSERT INTO " . $this->table . " SET $sql_part", $attributes, true);
    }

    /**
     * 
     */
    function extract($key, $value)
    {
        $records = $this->all();
        $return = [];
        foreach ($records as $v) {
            $return[$v->$key] = $v->$value;
        }
        return $return;
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

            return $this->database->prepare(
                $sql,
                $parrams,
                str_replace(
                    'Table',
                    'Entity',
                    get_class($this)
                ),
                $one
            );
        } else {

            return $this->database->query(
                $sql,
                str_replace(
                    'Table',
                    'Entity',
                    get_class($this)
                ),
                $one

            );
        }
    }
}
