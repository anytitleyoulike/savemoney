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
                        <a href="/savemoney/despesa/despesasPorCategoria" class="btn btn-material-orange"><i class="mdi-action-search"></i> Busca por categoria</a>
                        <a href="/savemoney/despesa/despesasPorFormaPagamento" class="btn btn-material-orange"><i class="mdi-action-search"></i> Busca por Forma de Pagamento</a>
                    </div>
                    <a href="/savemoney/receita/add" class="btn btn-success btn-raised ">Adicionar Receita</a>
                    <div class="col-lg-12">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Descrição</th>
                                <th>Valor</th>
                                <th>X</th> 
                            </tr>
                            </thead>
                            <tbody>
                            {% for receita in result %}
                            <tr>
                                <td><a href="/savemoney/receita/update/{{receita.id}}">{{receita.descricao}}</a></td>
                                <td>R$ {{receita.valor}}</td>
                                <td><a href="/savemoney/receita/remove/{{receita.id}}" onclick="removeReceita()">Excluir</a></td>
                            </tr>
                            {% endfor %}
                           </tbody>
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