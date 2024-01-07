<?php

namespace Core\Table;

use Core\Database;

class Table
{
    private static $prefix = "ntrhndmam_"; // Prefix for database tables
    protected  $table; // Table name
    protected  $database; // Database instance

    // Constructor function that initializes the Table class with a Database instance
    public  function __construct(Database $db)
    {
        $this->database = $db;
        // If the table name is not set, generate it dynamically based on the class name
        if (!$this->table) {
            $class_name = explode(DIRECTORY_SEPARATOR, get_class($this));
            $class_name = str_replace('Table', '', $class_name);
            $this->table = self::$prefix . strtolower(end($class_name));
        }
    }

    // Function that returns all records from the table
    public  function all()
    {
        return $this->query("SELECT * FROM  " . $this->table);
    }

    // Magic method that gets the value of a property if a getter method exists for it
    public function __get($name)
    {
        $method = 'get' . ucfirst($name);
        if (method_exists($this, $method)) {
            return $this->$method();
        }
        return null;
    }

    // Function that returns the number of records in the table
    public function count()
    {
        return  $this->query("SELECT COUNT(*) FROM " . $this->table)[0]->count;
    }

    // Function that deletes a record from the table by its ID
    public function delete($id)
    {
        return $this->query("DELETE FROM " . $this->table . " WHERE id = ?;", [$id], true);
    }

    // Function that finds a record in the table by its ID
    public  function find($id)
    {
        return  $this->query("SELECT * FROM  " . $this->table . " WHERE id = ?;", [$id], true);
    }

    // Function that updates a record in the table by its ID and a set of fields
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

    // Function that inserts a new record into the table with a set of fields
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

    // Function that extracts a key-value pair from all records in the table
    function extract($key, $value)
    {
        $records = $this->all();
        $return = [];
        foreach ($records as $v) {
            $return[$v->$key] = $v->$value;
        }
        return $return;
    }

    // Function that sends a query to the database and returns the result
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
