<?php namespace models;

class ProdutoModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function listar()
    {
        $sql = "SELECT * FROM produto";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function adicionar($nome, $descricao, $preco, $quantidade_estoque, $categoria_id)
    {
        $sql = "INSERT INTO produto (nome, descricao, preco, quantidade_estoque, categoria_id) VALUES (:nome, :descricao, :preco, :quantidade_estoque, :categoria_id)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':quantidade_estoque', $quantidade_estoque);
        $stmt->bindParam(':categoria_id', $categoria_id);

        return $stmt->execute();
    }

    public function buscarPorId($id)
    {
        $sql = "SELECT * FROM produto WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function atualizar($id, $nome, $descricao, $preco, $quantidade_estoque, $categoria_id)
    {
        $sql = "UPDATE produto SET nome = :nome, descricao = :descricao, preco = :preco, quantidade_estoque = :quantidade_estoque, categoria_id = :categoria_id WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);

        // var_dump($id, $nome, $descricao, $preco, $quantidade_estoque, $categoria_id);
        // exit;
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':quantidade_estoque', $quantidade_estoque);
        $stmt->bindParam(':categoria_id', $categoria_id);

        return $stmt->execute();
    }

    public function excluir($id)
    {
        $sql = "DELETE FROM produto WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);

        return $stmt->execute();
    }
}
