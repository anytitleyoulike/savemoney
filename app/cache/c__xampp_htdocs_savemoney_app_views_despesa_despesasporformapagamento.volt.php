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
                        <a href="/savemoney/orcamento/balanco" class="btn btn-material-lightblue">Balanço</a>
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="btn btn-warning"><i class="mdi-action-search"></i>Busca</a>
                            <a href="javascript:void(0)" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="/savemoney/despesa/despesasPorCategoria"></i>por Categoria</a></li>
                                <li><a href="/savemoney/despesa/despesasPorFormaPagamento"></i>por Forma de Pagamento</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h1 class="panel-title">Despesas por Forma de Pagamento</h1>
                    </div>
                    <table class="table table-striped table-hover">
                       <?php if($condition == true ) { ?>
                       <thead align="center">
                        <tr>
                            <th>Descricao</th>
                            <th>Valor</th>
                            <th>Forma de Pagamento</th>
                        </tr>
                        </thead>
                        <input type="hidden" id="oi" value="true">
                        <tbody>
                        <?php foreach ($result as $despesa) { ?>
                            <tr>
                                <td><a href="/savemoney/despesa/update/<?php echo $despesa->id; ?>"><?php echo $despesa->descricao; ?></a></td>
                                <td>R$<?php echo $despesa->valor; ?></td>
                                <td><?php echo $despesa->formapgto->tipo; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody> 

                        <?php } else { ?>
                            <thead align="center">
                            <tr>
                                <th>Forma de Pagamento</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <input type="hidden" id="oi" value="false">
                            <tbody>
                            <?php foreach ($result as $despesa) { ?>
                                <tr>
                                    <td><a href="/savemoney/despesa/despesasPorFormaPagamento/<?php echo $despesa->tipo; ?>"><?php echo $despesa->tipo; ?></td>
                                    <td>R$<?php echo $despesa->total; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                            <tr>
                                <th>Total Gasto:</th>
                                <th>R$<?php echo $totalGasto; ?></th>
                            </tr>
                        <?php } ?>
                    </table>
                    <button class="btn btn-flat btn-default" onClick="goBack()">Voltar</button> 
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

    function goBack() {
        var condition = document.getElementById('oi').value;
     
        if(condition === "true") {
           window.location.href = "/savemoney/despesa/despesasPorFormaPagamento"; 
        } else {
            window.location.href = "/savemoney/despesa/index";
        }
    }
</script>
</body>
</html>