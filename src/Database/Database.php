<?php

namespace Pansiere\Env\Database;

use PDO;

class Database
{
    public static function createConnection(): PDO
    {
        $connection = new PDO(
            'mysql:host=172.30.0.2;dbname=DB',
            'root',
            'password'
        );
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }
}
