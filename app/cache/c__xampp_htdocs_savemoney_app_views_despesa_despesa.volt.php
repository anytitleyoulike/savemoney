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

<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-lg-8">
            <div class="well">
                <h1>Save Money</h1>
                <div class="row">
                    <div class="col-lg-12">
                        <a href="despesa.html" class="btn btn-material-red">Despesas</a>
                        <a href="receitas.html" class="btn btn-material-lightgreen">Receitas</a>
                        <a href="orcamento.html" class="btn btn-material-lightblue">Orçamento</a>
                        <a href="busca.html" class="btn btn-default"><i class="mdi-action-search"></i> Busca por categoria</a>
                    </div>
                    <div class="col-lg-12">
                        <form class="form-horizontal">
                            <fieldset>
                                <legend>Adicionar Despesa</legend>
                                <div class="form-group">
                                    <label for="inputDescrib" class="col-lg-2 control-label">Descrição</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputDescrib" placeholder="Descreva a despesa">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputValue" class="col-lg-2 control-label">Valor</label>
                                    <div class="col-lg-10">
                                        <input type="number" class="form-control" id="inputValue" placeholder="Valor da despesa">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select" class="col-lg-2 control-label">Categoria</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" id="select">
                                            <option>Entretenimento</option>
                                            <option>Entretenimento</option>
                                            <option>Entretenimento</option>
                                            <option>Entretenimento</option>
                                            <option>Entretenimento</option>
                                            <option>Entretenimento</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Forma de pagamento</label>
                                    <div class="col-lg-10">
                                        <div class="radio radio-primary">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                                Cartão de Crédito
                                            </label>
                                        </div>
                                        <div class="radio radio-primary">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                Cartão de Débito
                                            </label>
                                        </div>
                                        <div class="radio radio-primary">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                Dinheiro
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-10 col-lg-offset-2">
                                        <button class="btn btn-default">Voltar</button>
                                        <button type="submit" class="btn btn-primary">Salvar</button>
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