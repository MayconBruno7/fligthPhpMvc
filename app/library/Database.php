<?php

namespace app;

use PDO;
use PDOException;

class Database {
    private $pdo;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        try {
            $this->pdo = new PDO(
                'mysql:host=localhost;dbname=flight', 
                'root', 
                '', 
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                ]
            );
        } catch (PDOException $e) {
            die("Erro de conexão: " . $e->getMessage());
        }
    }

    // Método para obter a instância do PDO
    public function getPDO() {
        return $this->pdo;
    }
}
