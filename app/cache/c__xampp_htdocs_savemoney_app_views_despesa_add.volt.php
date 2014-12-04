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
<form name='add' method="post" action="/savemoney/despesa/add">
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
                        <a href="/savemoney/despesa/despesasPorCategoria" class="btn btn-material-orange"><i class="mdi-action-search"></i> Busca por categoria</a>
                        <a href="/savemoney/despesa/despesasPorFormaPagamento" class="btn btn-material-orange"><i class="mdi-action-search"></i> Busca por Forma de Pagamento</a>
                    </div>
                    <div class="col-lg-12">
                        <form class="form-horizontal">
                            <fieldset>
                                <legend>Adicionar Despesa</legend>
                                <div class="form-group">
                                    <label for="inputDescrib" class="col-lg-2 control-label">Descrição</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="descricao" id="inputDescrib" placeholder="Descreva a despesa">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputValue" class="col-lg-2 control-label">Valor</label>
                                    <div class="col-lg-10">
                                        <input type="number" name="valor" class="form-control" id="inputValue" placeholder="Valor da despesa">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select" class="col-lg-2 control-label">Categoria</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" name="categoria" id="select">
                                            <?php foreach ($categoria as $cat) { ?>
                                                <option value="<?php echo $cat->cat_id; ?>"><?php echo $cat->cat_nome; ?></option>
                                            <?php } ?>  
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Forma de pagamento</label>
                                    <div class="col-lg-10">
                                            <div class="radio radio-primary">
                                                <label>
                                                    <input type="radio" name="forma_pgto" id="optionsRadios1" value="1">Cartão de Crédito
                                                </label>
                                            </div>
                                    
                                            <div class="radio radio-primary">
                                                <label>
                                                    <input type="radio" name="forma_pgto" id="optionsRadios2" value="2">Cartão de Débito
                                                </label>
                                            </div>
                                    
                                            <div class="radio radio-primary">
                                                <label>
                                                    <input type="radio" name="forma_pgto" id="optionsRadios3" value="3">Dinheiro
                                                </label>
                                            </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button class="btn btn-default">Voltar</button>
                                        <button type="submit" class="btn btn-primary" onClick="adicionarDespesa()">Salvar</button>
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
    $(document).ready(function() {
        $.material.init();
    });

     function adicionarDespesa(){
        alert("Despesa adicionada com sucesso!");
    }

    
</script>

</body>
</html>