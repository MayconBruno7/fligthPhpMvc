<?php
    require_once './app/views/comums/cabecalho.php';
?>

<div class="container mt-4" style="margin-top: 50px;">
    <h1 class="mb-4">Visualizar produto</h1>

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" value="<?php echo htmlspecialchars($produto['nome']); ?>" disabled>
    </div><br>

    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" rows="2" disabled><?php echo htmlspecialchars($produto['descricao']); ?></textarea>
    </div><br>

    <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <textarea class="form-control" id="preco" rows="1" disabled><?php echo htmlspecialchars(number_format($produto['preco'], 2, ',', '.')); ?></textarea>
    </div><br>

    <div class="mb-3">
        <label for="quantidade_estoque" class="form-label">Quantidade</label>
        <textarea class="form-control" id="quantidade_estoque" rows="1" disabled><?php echo htmlspecialchars($produto['quantidade_estoque']); ?></textarea>
    </div><br>

    <div class="mb-3">
        <label for="categoria_id" class="form-label">Categoria</label>
        <textarea class="form-control" id="categoria_id" rows="1" disabled><?php echo htmlspecialchars($produto['categoria_id']); ?></textarea>
    </div><br>
   
    <a href="/produto" class="btn btn-primary">Voltar</a>
</div>

<?php
    require_once './app/views/comums/rodape.php';
?>