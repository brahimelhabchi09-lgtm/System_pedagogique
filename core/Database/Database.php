<?php

namespace Core\Database;

use Exception;
use PDO;

class Database
{
    public static function getConnection()
    {
        try {
            $POSTGRES_HOST_ADDR = 'postgres';
            $POSTGRES_HOST_AUTH_METHOD = 'trust';
            $name = 'my_db';
            $POSTGRES_USER = 'gordo';
            $POSTGRES_PASSWORD = '2004';
            $connection = new PDO("pgsql:host=$POSTGRES_HOST_ADDR;dbname=$name", $POSTGRES_USER, $POSTGRES_PASSWORD);

            if (!$connection) {
                return null;
            }

            return $connection;
        } catch (Exception $e) {
            die("Database connection error: " . $e->getMessage());
        }
    }
}