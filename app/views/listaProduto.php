<?php
    require_once './app/views/comums/cabecalho.php';
?>

<title>Lista de produtos</title>

<!-- Inclua os arquivos CSS do DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<div style="margin-top: 100px;">
    <div class="container mt-4">
        <h1>Lista de produtos</h1>

        <p><a class="btn btn-success" href="/produto/adicionar/">Inserir</a></p>
        
        <table id="tbListaProduto" class="table table-bordered table-striped">
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
                <?php if (!empty($produtos)): ?>
                    <?php foreach ($produtos as $produto): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($produto['id']); ?></td>
                            <td><?php echo htmlspecialchars($produto['nome']); ?></td>
                            <td><?php echo htmlspecialchars($produto['descricao']); ?></td>
                            <td><?php echo date('d/m/Y H:i', strtotime($produto['created_at'])); ?></td>
                            <td>
                                <a class="btn btn-primary" href="<?php echo "/produto/editar/" . htmlspecialchars($produto['id']); ?>">Alterar</a>
                                <a class="btn btn-info" href="<?php echo "/produto/visualizar/" . htmlspecialchars($produto['id']); ?>">Visualizar</a>
                                <a class="btn btn-danger" href="<?php echo "/produto/excluir/" . htmlspecialchars($produto['id']); ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
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
        $('#tbListaProduto').DataTable({
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
