<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Página de Login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        <form class="form-horizontal" action="autentica.php" method="post">
            <fieldset>

            <!-- Página -->
            <legend>Página de Login → Admin</legend>

            <!-- Usuário -->
            <div class="form-group">
            <label class="col-md-4 control-label" for="txtUsuario">Usuário</label>  
            <div class="col-md-4">
            <input id="txtUsuario" name="usuario" type="text" placeholder="" class="form-control input-md" required="">
                
            </div>
            </div>

            <!-- Senha -->
            <div class="form-group">
            <label class="col-md-4 control-label" for="txtSenha">Senha</label>  
            <div class="col-md-4">
            <input id="txtSenha" name="senha" type="password" class="form-control input-md" required="">
                
            </div>
            </div>

            <!-- Entrar | Cancelar -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="btnEntrar"></label>
              <div class="col-md-8">
                <button id="btnEntrar" name="btnEntrar" class="btn btn-success">
                Entrar
                </button>
                <a href="index.html" class="btn btn-danger">Cancelar</a>
              </div>
            </div>

            </fieldset>
        </form>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>

