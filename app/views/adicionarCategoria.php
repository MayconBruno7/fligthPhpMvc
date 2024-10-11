
<?php
    require_once './app/views/comums/cabecalho.php';
?>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<div class="container" style="margin-top: 100px;">
    <h2>Adicionar Categoria</h2>
    <form method="POST" action="/categoria/adicionar">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea class="form-control" id="descricao" name="descricao" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</div>

<?php
    require_once './app/views/comums/rodape.php';
?>