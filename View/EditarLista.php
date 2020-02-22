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

    include "headerLogado.php";
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
                    <?php
                    include '../Model/CrudLista.php';
                    $codigo = $_GET["codigo"];
                    $resultado = MostraListaAlterar($codigo);
                    $linha = mysqli_fetch_assoc($resultado);
                   recebeCodigo($linha['codigo']);


                    ?>
                    <form action="../Controle/listacontrole.php" method="POST">
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Informe a descrição" required="required" value=" <?php echo $linha['descricao']; ?>">
                            <small class="form-text text-muted">Não pode deixar em branco.</small>
                        </div>
                        <div class="form-group">
                            <label for="quantidade">Quantidade</label>
                            <input type="number" id="quantidade" name="quantidade" class="form-control" placeholder="Informe A quantidade" value="<?php echo $linha['quantidade']; ?>">
                            <input type="hidden" name="codigo" value="<?php echo $linha['codigo']; ?>">

                        </div>
                        <button type="submit" name="opcao" value="Editar" class="btn btn-warning col-md-4 offset-4">Concluir</button>
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
    include "footer.php"
    ?>
</footer>

</html>