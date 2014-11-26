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
                        <a href="/savemoney/receita/index" class="btn btn-material-lightgreen">Receitas</a>
                        <a href="orcamento.html" class="btn btn-material-lightblue">Orçamento</a>
                        <a href="/savemoney/despesa/despesasPorCategoria" class="btn btn-material-lightgrey"><i class="mdi-action-search"></i> Busca por categoria</a>
                        <a href="/savemoney/despesa/despesasPorFormaPagamento" class="btn btn-default"><i class="mdi-action-search"></i> Busca por Forma de Pagamento</a>

                    </div>
                    <div class="col-lg-12">
                        <h2>Despesas por Forma de Pagamento</h2>
                        <table class="table table-striped table-hover">
                           <?php if($condition == true ) { ?>
                           <thead>
                            <tr>
                                <th>Descricao</th>
                                <th>Valor</th>
                                <th>Forma de Pagamento</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($result as $despesa) { ?>
                                <tr align="center">
                                    <td><a href="/savemoney/despesa/update/<?php echo $despesa->id; ?>"><?php echo $despesa->descricao; ?></a></td>
                                    <td>R$<?php echo $despesa->valor; ?></td>
                                    <td><?php echo $despesa->forma_pgto; ?></td>
                                </tr>
                            <?php } ?>
                            </tbody> 

                            <?php } else { ?>
                                <thead>
                                <tr>
                                    <th>Forma de Pagamento</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($result as $despesa) { ?>
                                    <tr align="center">
                                        <td><a href="/savemoney/despesa/despesasPorFormaPagamento/<?php echo $despesa->forma_pgto; ?>"><?php echo $despesa->forma_pgto; ?></td>
                                        <td>R$<?php echo $despesa->sumatory; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <?php } ?>
                        </table>
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