<?php

class DBConnection
{
    protected function connect()
    {
        // Create a PDO object.
        $dsn = 'mysql:host=' . __HOSTNAME__ . ';dbname=' . __DATABASE__;
        $pdo = new PDO($dsn, __USERNAME__, __PASSWORD__);
        // Set the PDO object's default fetch mode to associative array.
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        // Return the PDO object.
        return $pdo;
    }
}