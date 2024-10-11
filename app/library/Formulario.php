<?php

namespace App\Library;

use PDO;
use PDOException;
use Exception;

use App\Library\Formulario as LibraryFormulario;

class Formulario
{

    /**
     * getDataTables
     *
     * @param string $table_id 
     * @return string
     */
    static public function getDataTables($table_id)
    {
        return '
     
            <script type="text/javascript" src="/assets/datatables.min.js"></script>         
            <style>
                .dataTables_wrapper {
                    position: relative;
                    clear: both;
                }
                
                .dataTables_filter {
                    float: right;
                    margin-bottom: 5px;
                }
                
                .dataTables_paginate {
                    float: right;
                    margin: 0;
                }
                
                .dataTables_paginate .pagination {
                    margin: 0;
                    padding: 0;
                    list-style: none;
                    white-space: nowrap; /* Evita que a paginação quebre em várias linhas */
                }
                
                .dataTables_paginate .pagination .page-link {
                    border: none;
                    outline: none;
                    box-shadow: none;
                    margin: 0 2px; /* Espaçamento entre os botões de paginação */
                }
                
                .dataTables_paginate .pagination .page-item.disabled .page-link {
                    pointer-events: none;
                    color: #aaa;
                }
                
                .dataTables_paginate .pagination .page-item.active .page-link {
                    background-color: #007bff;
                    color: #fff;
                }
                
                .dataTables_paginate .pagination .page-link:hover {
                    background-color: #0056b3;
                    color: #fff;
                }
            </style>
    
            <script>
                $(document).ready( function() {
                    $("#' . $table_id . '").DataTable( {
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
        ';
    }
}