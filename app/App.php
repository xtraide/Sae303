<?php

namespace App;

use App\Database;

class App
{
    const DB_NAME = "ntrhndmam_acf2l";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_HOST = "localhost";


    private static $database;

    public static function getDatabase()
    {
        if (!self::$database) {
            self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
        }
        return self::$database;
    }
}
