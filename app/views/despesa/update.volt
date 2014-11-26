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
                        <a href="orcamento.html" class="btn btn-material-lightblue">Orçamento</a>
                        <a href="busca.html" class="btn btn-default"><i class="mdi-action-search"></i> Busca por categoria</a>
                    </div>
                    <div class="col-lg-12">
                        <form class="form-horizontal">
                            <fieldset>
                                <legend>Alterar Despesa</legend>
                                <div class="form-group">
                                    <label for="inputDescrib" class="col-lg-2 control-label">Descrição</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="descricao" value="{{despesa.descricao}}"id="inputDescrib" placeholder="Descreva a despesa">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputValue" class="col-lg-2 control-label">Valor</label>
                                    <div class="col-lg-10">
                                        <input type="number" name="valor" class="form-control" id="inputValue" value="{{despesa.valor}}" placeholder="Valor da despesa">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="select" class="col-lg-2 control-label">Categoria</label>
                                    <div class="col-lg-10">
                                        <select class="form-control" name="categoria" id="select">
                                            {%for cat in categoria%}

                                                {% if cat.cat_id == despesa.catId %}
                                                    <option value="{{cat.cat_id}}" selected>{{cat.cat_nome}}</option>
                                                {% else %}
                                                    <option value="{{cat.cat_id}}">{{cat.cat_nome}}</option>
                                                {% endif %}
                                            {%endfor%}  
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Forma de pagamento</label>
                                    <div class="col-lg-10">
                                        {%for pgto in pagamento %}
                                        <div class="radio radio-primary">

                                            {% if pgto.id == despesa.forma_pgto %}
                                            <label>
                                                <input type="radio" name="forma_pgto" id="optionsRadios1" value="{{pgto.id}}" checked="">{{pgto.tipo}}
                                            </label>
                                            {% else %}
                                            <label>
                                                <input type="radio" name="forma_pgto" id="optionsRadios1" value="{{pgto.id}}">{{pgto.tipo}}
                                            </label>
                                            {% endif %}
                                        </div>
                                        {%endfor%}  
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{despesa.id}}">
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
