<?php

namespace Config;

use Config\Database;
use PDO;
use PDOException;

class Conexion
{
    public static function connect()
    {
        try {
            $conexionPDO = new PDO(
                "mysql:host=".Database::HOST."; dbname=".Database::DATABASE, 
                Database::USER, 
                Database::PASSWORD,
            );
            $conexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexionPDO;
        } catch (PDOException $e) {
            return "Conexion fallida: " . $e->getMessage();
        }
    }
}