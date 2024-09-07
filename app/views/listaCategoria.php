<?php
    require_once './app/views/comums/cabecalho.php';
?>

<title>Lista de Categorias</title>

<div style="margin-top: 100px;">
    <div class="container mt-4">
        <h1 class="mb-4">Lista de Categorias</h1>

        <a href="/categoria/adicionar/">Inserir</a>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Data de Criação</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($categorias)): ?>
                    <?php foreach ($categorias as $categoria): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($categoria['id']); ?></td>
                            <td><?php echo htmlspecialchars($categoria['nome']); ?></td>
                            <td><?php echo htmlspecialchars($categoria['descricao']); ?></td>
                            <td><?php echo htmlspecialchars($categoria['created_at']); ?></td>
                            <td>
                                <a href="<?php echo "/categoria/editar/" . htmlspecialchars($categoria['id']); ?>">Alterar</a>
                                <a href="<?php echo "/categoria/visualizar/" . htmlspecialchars($categoria['id']); ?>">Visualizar</a>
                                <a href="<?php echo "/categoria/excluir/" . htmlspecialchars($categoria['id']); ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">Nenhuma categoria encontrada.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
