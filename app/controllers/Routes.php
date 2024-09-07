<?php namespace controllers;

use Flight;

class Routes {

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;

        // Configuração de caminhos de visualização
        Flight::set('flight.views.path', 'app/views/');
        
        // Pages Controller com PDO
        // Instancie o controlador de categorias
        $categoriaController = new CategoriaController($this->pdo);
        
        // Defina as rotas
        Flight::route('GET /categoria', array($categoriaController, 'categoria'));
        Flight::route('GET /categoria/editar/@id', array($categoriaController, 'editar'));
        Flight::route('POST /categoria/atualizar/@id', array($categoriaController, 'atualizar'));
        Flight::route('GET /categoria/visualizar/@id', array($categoriaController, 'visualizar'));
        Flight::route('GET /categoria/excluir/@id', array($categoriaController, 'excluir'));
        Flight::route('/categoria/adicionar', array($categoriaController, 'adicionar'));
        

        // Rota de redirecionamento padrão
        $pages = new PagesController($this->pdo);
        Flight::route('/', array($pages, 'index')); // Página inicial
        Flight::route('/index', array($pages, 'index')); // Página index
        Flight::route('/sobreNos', array($pages, 'sobreNos')); // Página sobre
        Flight::route('/contato', array($pages, 'contato')); // Página contato

        
    }

}
