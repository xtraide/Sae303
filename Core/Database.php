<?php

namespace Core;

use \PDO;

class Database
{
    private $db_host; // Database host
    private $db_name; // Database name
    private $db_user; // Database user
    private $db_pass; // Database password
    private $prefix;  // Prefix for database tables
    private $pdo;     // PDO instance

    // Constructor function that initializes the Database class with database credentials
    public function __construct($db_name, $db_user, $db_pass, $db_host)
    {
        $this->db_host = $db_host;
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->prefix = "ntrhndmam_";
    }

    // Function that creates a connection to the database and returns a PDO instance
    public function connect()
    {
        if ($this->pdo === null) {
            $pdo = new PDO("mysql:host=$this->db_host;dbname=$this->db_name;charset=utf8", $this->db_user, $this->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    // Function that sends a query without parameters to the database and returns the result
    public  function query($sql, $class_name = null, $one = null)
    {
        $req = $this->connect()->query($sql);

        if (
            strpos($sql, 'INSERT') === 0
            || strpos($sql, 'UPDATE') === 0
            || strpos($sql, 'DELETE') === 0
        ) {
            return $req;
        }

        if ($class_name != null) {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        } else {
            $req->setFetchMode(PDO::FETCH_OBJ);
        }

        if ($one != null) {
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }

        return $data;
    }

    // Function that sends a query with parameters to the database and returns the result
    public function prepare($sql, $params = [], $class_name = null, $one = null)
    {
        $req = $this->connect()->prepare($sql);
        $res = $req->execute($params) or die($this->connect()->errorInfo());

        if (
            strpos($sql, 'INSERT') === 0
            || strpos($sql, 'UPDATE') === 0
            || strpos($sql, 'DELETE') === 0
        ) {
            return $res;
        }

        if ($class_name != null) {
            $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        } else {
            $req->setFetchMode(PDO::FETCH_OBJ);
        }

        if ($one != null) {
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }

        return $data;
    }
}
