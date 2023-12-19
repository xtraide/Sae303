<?php

namespace Core;

use \PDO;

class Database
{

    private $db_host;
    private $db_name;
    private $db_user;
    private $db_pass;
    private $pdo;
    /**
     * Constructeur de la class Database
     * @param string $db_name 
     * @param string $db_user 
     * @param string $db_pass 
     * @param string $db_host 
     */
    public function __construct($db_name, $db_user = "root", $db_pass = "", $db_host = "localhost")
    {
        $this->db_host = $db_host;
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
    }
    /**
     * Cree une connection avec la bdd
     * @return PDO
     */
    public function connect()
    {
        if ($this->pdo === null) {
            $pdo = new PDO("mysql:host=$this->db_host;dbname=$this->db_name;charset=utf8", $this->db_user, $this->db_pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }
    /**
     * Envoie une requete sans parametre a la bdd
     * @param string $sql the SQL
     * @param string $class_name the class name
     * @param string $one si on veut recuperer un seul element
     * @return array
     */
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

    /**
     * Envoie une requete avec parrametre a la bdd
     * @param string $sql reque sql
     * @param array $params parametres
     * @param string $class_name nom de la classe
     * @param boolean $one si on veut recuperer un seul element
     * @return Object
     */
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
