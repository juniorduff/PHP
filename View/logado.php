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
<?php


?>

    <div class="py-5" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 style="">Lista online<br></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive" style="">
                        <table class="table table-bordered ">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Descrição</th>
                                    <th>Quantidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th style="">1</th>
                                    <td>maça</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Leite</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Arroz</td>
                                    <td>3</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <a type="submit" href="CadastroLista.php" class="btn btn-primary col-md-3 ">Criar Nova Lista?</a>
                <a type="submit" href="visualizarLista.php" class="btn btn-primary col-md-3 offset-6"><b>Vizualizar suas listas?</b></a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js " integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous " style=""></script>
  
</body>
<footer>
    <?php
        include 'footer.php';
    
    ?>
</footer>
</html>