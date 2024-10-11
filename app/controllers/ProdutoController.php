<?php namespace controllers;

use models\ProdutoModel;
use models\CategoriaModel;
use Flight;

class ProdutoController
{
    private $produtoModel;
    private $categoriaModel;

    public function __construct($pdo)
    {
        $this->produtoModel = new ProdutoModel($pdo);
        $this->categoriaModel = new CategoriaModel($pdo);

    }

    public function produto()
    {

        $produtos = $this->produtoModel->listar();
        Flight::render('listaProduto', ['produtos' => $produtos]);
    }

    public function adicionar()
    {
  
        $produtos = $this->produtoModel->listar();
        $categorias = $this->categoriaModel->listar();

        // Flight::render('listaProduto', ['produtos' => $produtos, 'categorias' => $categorias]);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $preco = $_POST['preco'];
            $quantidade_estoque = $_POST['quantidade_estoque'];
            $categoria_id = $_POST['categoria_id'];

            $categoria = $this->produtoModel->adicionar($nome, $descricao, $preco, $quantidade_estoque, $categoria_id);

            Flight::redirect('/produto');
        }

        Flight::render('adicionarProduto', ['categorias' => $categorias]);
    }

    public function editar($id)
    {
        $produto = $this->produtoModel->buscarPorId($id); 
        $categorias = $this->categoriaModel->listar();


        if (!$produto) {
            Flight::notFound();
        }

        Flight::render('editarProduto', ['produto' => $produto, 'categorias' => $categorias]);
    }

    public function atualizar($id)
    {

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $quantidade_estoque = $_POST['quantidade_estoque'];
        $categoria_id = $_POST['categoria_id'];

        $atualizado = $this->produtoModel->atualizar($id, $nome, $descricao, $preco, $quantidade_estoque, $categoria_id); 

        if ($atualizado) {
            Flight::redirect('/produto');
        } else {
            Flight::render('error', ['message' => 'Falha ao atualizar a produto']);
        }
    }

    public function visualizar($id)
    {
        $produto = $this->produtoModel->buscarPorId($id); 

        if (!$produto) {
            Flight::notFound();
        }

        Flight::render('visualizarProduto', ['produto' => $produto]);
    }

    public function excluir($id)
    {
        $excluido = $this->produtoModel->excluir($id); 

        if ($excluido) {
            Flight::redirect('/produto');
        } else {
            Flight::render('error', ['message' => 'Falha ao excluir a produto']);
        }
    }
}
