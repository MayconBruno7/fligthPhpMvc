<?php namespace controllers;

use Flight;

class PagesController
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public static function index()
    {
        Flight::render('index');
    }

    public static function sobreNos()
    {   
        Flight::render('sobreNos');

    }
    
    public static function contato()
    {
        Flight::render('contato');
    }
    
    public static function redirect()
    {
        Flight::render('redirect');
    }

}



