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

    public function getUserId()
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
            if ($user->password === sha1($password)) {
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
}