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
    <div class="py-5 text-center"
        style="	background-image: url(../Imagem/carrinho.jpg);	background-size: cover;	background-position: top left;	background-repeat: repeat;">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-md-6 col-10 bg-white p-5">
                    <h1 class="mb-4">Entrar</h1>

                    <form action="../Controle/UsuarioControle.php" method="post">
                        <div class="form-group">
                            <label for="nome">Nome do Usuario:</label>
                            <input type="text" name="nome" id="nome" class="form-control"
                                placeholder="Digite o usuario..">
                        </div>

                        <div class="form-group mb-3">
                            <label for="senha">Senha:</label>
                            <input type="password" name="senha" id="senha" class="form-control"
                                placeholder="Digite a senha ..">
                            <a href="Cadastro.php">Não possui cadastro?</a>
                        </div>
                        <button type="submit" name="opcao" value="Entrar"
                            class="btn btn-primary col-md-6">Entrar</button>

                </div>
            </div>
        </div>
    </div>
    <div class="py-5" style="">
        <div class="container">
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"
        style=""></script>
</body>
<footer>
    <?php
    include 'footer.php';

    ?>
</footer>

</html>