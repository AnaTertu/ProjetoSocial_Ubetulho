<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./css/estilo.css">
        <title>Projeto Social Ubertulho</title>

    </head>
    <body>
        <div class="catainer">
            <div class="row">
                <div class="col-4 mx-auto mt-6 pt-4 container-login"> <!--mt = margin top, pt = padding top-->
                    <span class="mb-4 h3">Login</span>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label class="label-form" for="email">E-mail: </label>
                            <input class="form-control" type="email" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label  class="label-form" for="senha">Senha: </label>
                            <input class="form-control" type="password" name="senha" id="senha">
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <button type="submit" class="btn btn-primary mb-4" name="logar"> Entrar </button>
                            </div>
                            <div class="col-1">
                                <a href="./php1/cadastro_cliente.php" type="submit" class="btn btn-success mb-4" name="logar"> Cadastrar </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>