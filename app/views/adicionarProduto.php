<?php
    require_once './app/views/comums/cabecalho.php';

?>

<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

<div class="container" style="margin-top: 100px;">
    <h2>Adicionar Produto</h2>
    <form method="POST" action="/produto/adicionar">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" required></textarea>
        </div>

        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="text" class="form-control" id="preco" name="preco" required>
        </div>

        <div class="form-group">
            <label for="quantidade_estoque">Quantidade:</label>
            <input type="text" class="form-control" id="quantidade_estoque" name="quantidade_estoque" required>
        </div>

        <div class="form-group">
            <label for="categoria_id">Categoria:</label>
            <select class="form-control" id="categoria_id" name="categoria_id" required>
                <option value="">Selecione uma categoria</option>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= htmlspecialchars($categoria['id']) ?>">
                        <?= htmlspecialchars($categoria['nome']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>

<?php
    require_once './app/views/comums/rodape.php';
?>