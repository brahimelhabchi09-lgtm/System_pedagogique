<?php

namespace Database;

use Exception;
use PDO;

class Database{
    public static function getConnection(){
        try {
            $host = 'localhost';
            $name = 'pedagogical_management';
            $user = 'gigantegordo';
            $pass = '2004';
            $connection = new PDO("mysql:host=$host;dbname=$name", $user, $pass);

            if (!$connection) {
                return null;
            }

            return $connection;
        } catch (Exception $e) {
            die("Database connection error: " . $e->getMessage());
        }
    }
}