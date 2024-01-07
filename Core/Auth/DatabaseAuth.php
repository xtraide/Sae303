<?php

namespace Core\Auth;

use Core\Database;

class DatabaseAuth
{
    private $db;
    private static $prefix = "ntrhndmam_";

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getUserAuth()
    {
        if ($this->logged()) {
            return $_SESSION['auth'];
        }
        return false;
    }

    /**
     * verifie si l'utilisateur est connecte
     * @param string $email 
     * @param string $password
     * @return boolean 
     */
    public function login($email, $password)
    {
        $user = $this->db->prepare('SELECT * FROM ' . self::$prefix . 'user WHERE email = ?', [$email], null, true);
        if ($user) {
            var_dump($user);
            if ($user->password === $password) {
                $_SESSION['auth'] = $user->id;
                return true;
            }
        }
        return false;
    }

    public function logged()
    {
        return isset($_SESSION['auth']);
    }

    public function logout()
    {
        unset($_SESSION['auth']);
    }

    public function register($fields)
    {
        if ($this->db->prepare('INSERT INTO ' . self::$prefix . 'user SET email = ?, password = ?', [$fields['email'], sha1($fields['password'])])) {
            return true;
        } else {
            return false;
        }
    }
    public function isAdmin()
    {
        if ($this->logged()) {

            $user = $this->db->prepare('SELECT role FROM ' . self::$prefix . 'user WHERE id = ?', [$_SESSION['auth']], null, true);
            if ($user->role == "admin") {
                return true;
            }
        }
        return false;
    }
}
