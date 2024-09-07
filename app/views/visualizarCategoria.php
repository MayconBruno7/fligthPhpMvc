<?php
    require_once './app/views/comums/cabecalho.php';
?>

<div class="container mt-4" style="margin-top: 100px;">
    <h1 class="mb-4">Visualizar Categoria</h1>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" value="<?php echo htmlspecialchars($categoria['nome']); ?>" disabled>
    </div>
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" rows="3" disabled><?php echo htmlspecialchars($categoria['descricao']); ?></textarea>
    </div>
    <a href="/categoria" class="btn btn-secondary">Voltar</a>
</div>

