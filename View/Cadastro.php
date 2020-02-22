<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>
<header>
    <?php
  include 'header.php';
  ?>
</header>

<body>
  

    <div class="py-5">
        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <h1 class="col-md offset-4">Cadastrar Usuario</h1>
                    <div class="form-group">
                        <form action="../Controle/UsuarioControle.php" method="post">
                            <label for="nome">Nome do Usuario</label>
                            <input type="text" name="nome" id="nome" required="required" class="form-control"
                                placeholder="Digite o usuario..">
                            <small class="form-text text-muted">*Preenchimento obrigatorio.</small>
                    </div>

                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
                </div>

            </div>



            <div class="row">
                <button type="submit" name="opcao" value="Cadastrar"
                    class="btn btn-primary left col-md-2 offset-3">Cadastrar</button>

                <button type="reset" class="btn btn-info col-md-2 ">Limpar Campos</button>

            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>

</body>
<footer>
    <?php
  include 'footer.php';
  ?>
</footer>

</html>