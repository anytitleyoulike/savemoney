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
                        <a href="/savemoney/despesa/despesasPorCategoria" class="btn btn-material-orange"><i class="mdi-action-search"></i> Busca por categoria</a>
                        <a href="/savemoney/despesa/despesasPorFormaPagamento" class="btn btn-material-orange"><i class="mdi-action-search"></i> Busca por Forma de Pagamento</a>

                    </div>
                </div>
            

                <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1 class="panel-title">Balanço</h1>
                        </div>
                        <div class="panel-body">
                            
                            <h3>Despesas</h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-material-red" style="width: {{porcentagemDespesa}}%"></div>
                                </div>

                            <h3>Receitas</h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" style="width: {{porcentagemReceita}}%"></div>
                                </div>
                        </div>
                    </div>

                    <div class="well well-sm">
                        {%if balanco > 0 %}
                        Balanço: R${{balanco}} :)
                        {%else%}
                        Balanço: R${{balanco}} :(
                        {%endif%}
                    </div>

                    {% if totalReceita > totalDespesa %}
                        <div class="alert alert-dismissable alert-success">
                             <strong>Muito bem!!</strong> Voce seu balanço é positivo.
                        </div>
                    {%else %}
                        <div class="alert alert-dismissable alert-danger">
                             <strong>Ah não!!</strong> Voce precisa poupar mais seu dinheiro.
                        </div>
                    {%endif%}
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