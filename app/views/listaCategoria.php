<?php
    require_once './app/views/comums/cabecalho.php';
?>

<title>Lista de Categorias</title>

<!-- Inclua o arquivo CSS do DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<div style="margin-top: 100px;">
    <div class="container mt-4">
        <h1 class="mb-4">Lista de Categorias</h1>

        <p><a class="btn btn-success" href="/categoria/adicionar/">Inserir</a></p>

        <table id="tbListaCategoria" class="table table-bordered table-striped">
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
                            <td><?php echo date('d/m/Y H:i', strtotime($categoria['created_at'])); ?></td>
                            <td>
                                <a class="btn btn-primary" href="<?php echo "/categoria/editar/" . htmlspecialchars($categoria['id']); ?>">Alterar</a>
                                <a class="btn btn-info" href="<?php echo "/categoria/visualizar/" . htmlspecialchars($categoria['id']); ?>">Visualizar</a>
                                <a class="btn btn-danger" href="<?php echo "/categoria/excluir/" . htmlspecialchars($categoria['id']); ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Inclua os arquivos JavaScript do DataTables e jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tbListaCategoria').DataTable({
            "order": [],
                        "columnDefs": [{
                            "targets": "no-sort",
                            "orderable": false,                       
                        }],
                        language: {
                            "sEmptyTable":      "Nenhum registro encontrado",
                            "sInfo":            "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                            "sInfoEmpty":       "Mostrando 0 até 0 de 0 registros",
                            "sInfoFiltered":    "(Filtrados de _MAX_ registros)",
                            "sInfoPostFix":     "",
                            "sInfoThousands":   ".",
                            "sLengthMenu":      "_MENU_ resultados por página",
                            "sLoadingRecords":  "Carregando...",
                            "sProcessing":      "Processando...",
                            "sZeroRecords":     "Nenhum registro encontrado",
                            "sSearch":          "Pesquisar",
                            "oPaginate": {
                                "sNext":        "Próximo",
                                "sPrevious":    "Anterior",
                                "sFirst":       "Primeiro",
                                "sLast":        "Último"
                            },
                            "oAria": {
                                "sSortAscending":   ": Ordenar colunas de forma ascendente",
                                "sSortDescending":  ": Ordenar colunas de forma descendente"
                            }
                        }
        });
    });
</script>

<?php
    require_once './app/views/comums/rodape.php';
?>
