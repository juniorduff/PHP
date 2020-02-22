<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>
<header>
    <?php
    include 'headerLogado.php';

    ?>
</header>

<body>

    <div class="py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Faça Sua Lista<br></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="../Controle/listaControle.php" method="post">
                        <div class="form-group">
                            <label name="descricao" for="descricao">Descrição</label>
                            <input type="text" class="form-control" name="descricao" placeholder="Informe a descrição" required="required">
                            <small class="form-text text-muted">Preenchimento Obrigatorio.</small>
                        </div>
                        <div class="form-group">
                            <label for="quantidade" name="quantidade">Quantidade</label>
                            <input type="number" for="quantidade" name="quantidade" class="form-control" placeholder="Informe A quantidade">
                        </div>
                        <button type="submit" name="opcao" value="cadastrar" class="btn btn-warning col-md-3 offset-4">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>
<footer>
    <?php
    include 'footer.php';
    ?>
</footer>

</html>