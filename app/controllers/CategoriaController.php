<?php namespace controllers;

use models\CategoriaModel;
use Flight;

class CategoriaController
{
    private $categoriaModel;

    public function __construct($pdo)
    {
        $this->categoriaModel = new CategoriaModel($pdo);
    }

    public function categoria()
    {

        $categorias = $this->categoriaModel->listar();
        Flight::render('listaCategoria', ['categorias' => $categorias]);
    }

    public function adicionar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];

            $categoria = $this->categoriaModel->adicionar($nome, $descricao);

            Flight::redirect('/categoria');
        }

        Flight::render('adicionarCategoria');
    }

    public function editar($id)
    {
        $categoria = $this->categoriaModel->buscarPorId($id);

        if (!$categoria) {
            Flight::notFound();
        }

        Flight::render('editarCategoria', ['categoria' => $categoria]);
    }

    public function atualizar($id)
    {
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        $atualizado = $this->categoriaModel->atualizar($id, $nome, $descricao);

        if ($atualizado) {
            Flight::redirect('/categoria');
        } else {
            Flight::render('error', ['message' => 'Falha ao atualizar a categoria']);
        }
    }

    public function visualizar($id)
    {
        $categoria = $this->categoriaModel->buscarPorId($id);

        if (!$categoria) {
            Flight::notFound();
        }

        Flight::render('visualizarCategoria', ['categoria' => $categoria]);
    }

    public function excluir($id)
    {
        $excluido = $this->categoriaModel->excluir($id);

        if ($excluido) {
            Flight::redirect('/categoria');
        } else {
            Flight::render('error', ['message' => 'Falha ao excluir a categoria']);
        }
    }
}
