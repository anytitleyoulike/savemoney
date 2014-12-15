<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title></title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/ripples.min.css" rel="stylesheet">
    <link href="../css/material-wfont.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-lg-8">
            <div class="well">
                <h1>Save Money</h1>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="/savemoney/despesa/index" class="btn btn-material-red">Despesas</a>
                        <a href="/savemoney/receita/" class="btn btn-material-lightgreen">Receitas</a>
                        <a href="/savemoney/orcamento/balanco" class="btn btn-material-lightblue">Balanço</a>
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-warning"><i class="mdi-action-search"></i>Busca</a>
                            <a href="javascript:void(0)" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/savemoney/despesa/despesasPorCategoria"></i>por Categoria</a></li>
                                <li><a href="/savemoney/despesa/despesasPorFormaPagamento"></i>por Forma de Pagamento</a></li>
                            </ul>
                        </div>
                    <a href="/savemoney/orcamento/add" class="btn btn-primary">Adicionar Orcamento</a>
                    </div>
                </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Lista de Orçamentos</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-12">
                                <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Categoria</th>
                                        <th>Valor Restante</th>
                                        <th>X</th> 
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($result as $orcamento) { ?>
                                    <tr class="danger">
                                        <td><a href="/savemoney/orcamento/update/<?php echo $orcamento->id; ?>"><?php echo $orcamento->categoria->cat_nome; ?></a></td>
                                        <td>R$ <?php echo $orcamento->valor; ?></td>
                                        <td><a href="/savemoney/orcamento/remove/<?php echo $orcamento->id; ?>" onclick="removeOrcamentgo()">Excluir</a></td>
                                    </tr>
                                    <?php } ?>
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script src="../js/ripples.min.js"></script>
    <script src="../js/material.min.js"></script>
    <script>
        $(document).ready(function() {
            $.material.init();
        });
    </script>
</body>
</html>