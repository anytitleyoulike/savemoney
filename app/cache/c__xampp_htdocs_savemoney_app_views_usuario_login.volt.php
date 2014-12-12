<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 

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
                    <form name='login' class="form-horizontal" method="post" action="/savemoney/usuario/login">
                        <h1>Savemoney</h1>
                        <div class="panel panel-default">
                            <div class="panel-heading">Login</div>
                                <div class="panel-body">
                                    <fieldset>
                                        <div class="form-group">
                                            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                            <div class="col-lg-10">
                                                <input type="email" class="form-control" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword" class="col-lg-2 control-label">Senha</label>
                                            <div class="col-lg-10">
                                                <input type="password" class="form-control" name="senha" placeholder="Senha">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-10 col-lg-offset-2">
                                                <button class="btn btn-default">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Entrar</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </form>
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