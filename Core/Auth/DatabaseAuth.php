<?php

namespace Core\Auth;

use Core\Database;

class DatabaseAuth
{
    private $db;
    private static $prefix = "ntrhndmam_";

    // Constructor function that initializes the DatabaseAuth class with a Database instance
    public function __construct(Database $db)
    {

        $this->db = $db;
    }

    // Function that returns the user's session if they are logged in, or false if they are not
    public function getUserAuth()
    {
        if ($this->logged()) {
            return $_SESSION['auth'];
        }
        return false;
    }

    /**
     * Function that checks if the user is logged in by verifying their email and password
     * @param string $email 
     * @param string $password
     * @return boolean 
     */
    public function login($email, $password)
    {
        $user = $this->db->prepare('SELECT * FROM ' . self::$prefix . 'user WHERE email = ?', [$email], null, true);
        if ($user) {
            if ($user->password === $password) {
                $_SESSION['auth'] = $user->id;
                return true;
            }
        }
        return false;
    }

    // Function that checks if the user is logged in by checking if a session exists
    public function logged()
    {
        return isset($_SESSION['auth']);
    }

    // Function that logs the user out by unsetting their session
    public function logout()
    {
        unset($_SESSION['auth']);
    }

    // Function that registers a new user by inserting their email and password into the database
    public function register($fields)
    {
        if ($this->db->prepare('INSERT INTO ' . self::$prefix . 'user SET email = ?, password = ?', [$fields['email'], sha1($fields['password'])])) {
            return true;
        } else {
            return false;
        }
    }

    // Function that checks if the logged in user is an admin by checking their role in the database
    public function isAdmin()
    {
        if ($this->logged()) {
            $user = $this->db->prepare('SELECT role FROM ' . self::$prefix . 'user WHERE id = ?', [$_SESSION['auth']], null, true);
            if ($user->role == "Admin") {
                return true;
            }
        }
        return false;
    }
}
