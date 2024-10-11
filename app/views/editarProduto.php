<?php
    require_once './app/views/comums/cabecalho.php';
?>

<div class="container mt-4" style= "margin-top: 50px;">
    <h1 class="mb-4">Editar Produto</h1>
    <form action="/produto/atualizar/<?php echo htmlspecialchars($produto['id']); ?>" method="POST">
        <div class="mb-3 mt-5">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo htmlspecialchars($produto['nome']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required><?php echo htmlspecialchars($produto['descricao']); ?></textarea>
        </div>

        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="text" class="form-control" id="preco" name="preco" value="<?php echo htmlspecialchars(number_format($produto['preco'], 2, ',', '.')); ?>" required>
        </div>

        <div class="form-group">
            <label for="quantidade_estoque">Quantidade:</label>
            <input type="text" class="form-control" id="quantidade_estoque" name="quantidade_estoque" value="<?php echo htmlspecialchars($produto['quantidade_estoque']); ?>" required>
        </div>

        <div class="form-group">
            <label for="categoria_id">Categoria:</label>
            <select class="form-control" id="categoria_id" name="categoria_id" required>
                <option value="">Selecione uma categoria</option>
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?= htmlspecialchars($categoria['id']) ?>" <?= isset($produto['categoria_id']) && $produto['categoria_id'] == $categoria['id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($categoria['nome']) ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>


        <p><button type="submit" class="btn btn-primary">Atualizar</button></p>
    </form>
</div>

<?php

    require_once './app/views/comums/rodape.php';
?>