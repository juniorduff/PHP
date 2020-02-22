<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
    <link rel="stylesheet" href="icone.css">


</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0 p-0" type="button"
                data-toggle="collapse" data-target="#navbar8">
                <p class="navbar-brand text-primary mb-0">
                    <i class="fa d-inline fa-lg fa-stop-circle"></i> BRAND </p>
                    
            </button>
            <div class="collapse navbar-collapse" id="navbar8">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"> <a class="nav-link" href="logado.php">Pagina Inicial</a> </li>
                </ul>
                <p class="text-primary d-none d-md-block lead mb-0"> <i class="fa d-inline fa-lg fa-stop-circle"></i>
                    <b> Mercadinho.com</b> </p>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#">
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#">
                        </a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link" href="#">
                        </a>
                    </li>
                </ul>
                <div class="dropdown">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php 
   
   session_start();
   if(isset($_SESSION['nome'])){
        echo'Seja Bem-Vindo ',$_SESSION['nome'];


   }
   

   
   ?><br>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    
                        <a href="../Controle/UsuarioControle.php?opcao=Sair" class="btn btn-default glyphicon glyphicon-log-out">Sair</a>
                      


                    </div>
                </div>

                </i></a>


            </div>
        </div>
    </nav>
</header>

</html>