<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title></title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/ripples.min.css" rel="stylesheet">
    <link href="../css/material-wfont.min.css" rel="stylesheet">

    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>
<body>
<form name='add' method="post" action="/savemoney/despesa/update">
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-lg-8">
            <div class="well">
                <h1>Save Money</h1>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="/savemoney/despesa/index" class="btn btn-material-red">Despesas</a>
                        <a href="receitas.html" class="btn btn-material-lightgreen">Receitas</a>
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
                    <div class="col-lg-12">
                        <form class="form-horizontal">
                            <fieldset>
                                <legend>Alterar Despesa</legend>
                                <div class="form-group">
                                    <label for="inputDescrib" class="col-lg-2 control-label">Descrição</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="descricao" value="<?php echo $despesa->descricao; ?>"id="inputDescrib" placeholder="Descreva a despesa">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputValue" class="col-lg-2 control-label">Valor</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="valor" class="form-control" id="inputValue" value="<?php echo $despesa->valor; ?>" placeholder="Valor da despesa">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select" class="col-lg-2 control-label">Categoria</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" name="categoria" id="select">
                                            <?php foreach ($categoria as $cat) { ?>

                                                <?php if ($cat->cat_id == $despesa->catId) { ?>
                                                    <option value="<?php echo $cat->cat_id; ?>" selected><?php echo $cat->cat_nome; ?></option>
                                                <?php } else { ?>
                                                    <option value="<?php echo $cat->cat_id; ?>"><?php echo $cat->cat_nome; ?></option>
                                                <?php } ?>
                                            <?php } ?>  
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Forma de pagamento</label>
                                    <div class="col-lg-10">
                                        <?php foreach ($pagamento as $pgto) { ?>
                                        <div class="radio radio-primary">

                                            <?php if ($pgto->id == $despesa->forma_pgto) { ?>
                                            <label>
                                                <input type="radio" name="forma_pgto" id="optionsRadios1" value="<?php echo $pgto->id; ?>" checked=""><?php echo $pgto->tipo; ?>
                                            </label>
                                            <?php } else { ?>
                                            <label>
                                                <input type="radio" name="forma_pgto" id="optionsRadios1" value="<?php echo $pgto->id; ?>"><?php echo $pgto->tipo; ?>
                                            </label>
                                            <?php } ?>
                                        </div>
                                        <?php } ?>  
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $despesa->id; ?>">
                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button class="btn btn-default">Voltar</button>
                                        <button type="submit" class="btn btn-primary" onClick="alterarDespesa()">Alterar Despesa</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script src="../js/ripples.min.js"></script>
<script src="../js/material.min.js"></script>
<script>
    
     function alterarDespesa(){
        alert("Despesa alterada com sucesso!");
    }

    
</script>

</body>
</html>
