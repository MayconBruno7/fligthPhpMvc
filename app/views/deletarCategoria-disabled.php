<?php
    require_once './app/views/layouts/cabecalho.php';
?>

<title>Deletar Categoria</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

<div class="container mt-4">
    <h1 class="mb-4">Deletar Categoria</h1>
    <form action="/categoria/excluir/<?php echo htmlspecialchars($categoria['id']); ?>" method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo htmlspecialchars($categoria['nome']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required><?php echo htmlspecialchars($categoria['descricao']); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
