<?php

session_start();

// Configuração do PDO
try {
    $pdo = new PDO('mysql:host=localhost;dbname=estoque', 'root', '', 
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ]);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}

// Carregar rotas e passar o PDO
require 'vendor/autoload.php';

new controllers\Routes($pdo); // Aqui o PDO é passado para o construtor de Routes

Flight::start();
