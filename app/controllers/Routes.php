<?php namespace controllers;

use Flight;

class Routes {

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;

        Flight::set('flight.views.path', 'app/views/');
        
        $categoriaController = new CategoriaController($this->pdo);

        Flight::route('GET /categoria', array($categoriaController, 'categoria'));
        Flight::route('GET /categoria/editar/@id', array($categoriaController, 'editar'));
        Flight::route('POST /categoria/atualizar/@id', array($categoriaController, 'atualizar'));
        Flight::route('GET /categoria/visualizar/@id', array($categoriaController, 'visualizar'));
        Flight::route('GET /categoria/excluir/@id', array($categoriaController, 'excluir'));
        Flight::route('/categoria/adicionar', array($categoriaController, 'adicionar'));
        
        $ProdutoController = new ProdutoController($this->pdo);

        Flight::route('GET /produto', array($ProdutoController, 'produto'));
        Flight::route('GET /produto/editar/@id', array($ProdutoController, 'editar'));
        Flight::route('POST /produto/atualizar/@id', array($ProdutoController, 'atualizar'));
        Flight::route('GET /produto/visualizar/@id', array($ProdutoController, 'visualizar'));
        Flight::route('GET /produto/excluir/@id', array($ProdutoController, 'excluir'));
        Flight::route('/produto/adicionar', array($ProdutoController, 'adicionar'));

    
        $pages = new PagesController($this->pdo);
        Flight::route('/', array($pages, 'index')); 
        Flight::route('/index', array($pages, 'index')); 
        Flight::route('/sobreNos', array($pages, 'sobreNos')); 
        Flight::route('/contato', array($pages, 'contato'));
    }

}
