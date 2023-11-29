<?php

namespace app;

use \PDO;

class Database
{

    private $db_host;
    private $db_name;
    private $db_user;
    private $db_pass;
    private $pdo;

    public function __construct($db_name, $db_user = "root", $db_pass = "", $db_host = "localhost")
    {
        $this->db_host = $db_host;
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
    }

    public function connect()
    {
        if ($this->pdo === null) {
            $pdo = new PDO("mysql:host=$this->db_host;dbname=$this->db_name;charset=utf8", $this->db_user, $this->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public  function query($sql, $class_name)
    {
        $req = $this->connect()->query($sql);
        $data = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $data;
    }

    public function prepare($sql, $params = [], $class_name)
    {
        $req = $this->connect()->prepare($sql);
        $req->execute($params) or die($this->connect()->errorInfo());
        $data = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $data;
    }
}
