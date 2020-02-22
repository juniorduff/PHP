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
    include "headerlogado.php";

    ?>
</header>

<body>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">Visualizar Lista online<br>
                    </h1>
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
                            <!-- Botão para acionar modal -->
                            <button type="button" class="btn btn-primary col-md-2 offset-10" data-toggle="modal" data-target="#modalExemplo">
                                Cadastrar Mais?
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Adicionar Item</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-md-12">
                                                <form action="../controle/listaControle.php" method="post">
                                                    <div class="form-group">
                                                        <label name="descricao" for="descricao">Descrição</label>
                                                        <input type="text" class="form-control" name="descricao" placeholder="Informe a descrição" required="required">
                                                        <small class="form-text text-muted">Preenchimento
                                                            Obrigatorio.</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="quantidade" name="quantidade">Quantidade</label>
                                                        <input type="number" for="quantidade" name="quantidade" class="form-control" placeholder="Informe A quantidade">
                                                    </div>
                                                    <button type="submit" name="opcao" value="cadastrarModal" class="btn btn-warning col-md-3 offset-4">Cadastrar</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <thead class="thead-dark">
                    <tr>
                        <th></th>
                        <th>Descricao</th>
                        <th>Quantidade</th>
                        <th style="width: 13%;"> Ações</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $contador = 1;
                    include '../Model/crudLista.php';
                    $resultado = mostrarLista();

                    while ($linha = mysqli_fetch_assoc($resultado)) {
                        echo "
                                   
                                        <tr>
                                                    <tr>
                                                        <th>$contador</th>
                                                        <td class=''>$linha[descricao]</td>
                                                        <td class=''>$linha[quantidade]</td>
                                                        <td><a class=' btn btn-primary btn-sm' href='EditarLista.php?codigo=$linha[codigo]'><b>Editar</b></a>
                                                            <a class=' btn btn-warning btn-sm 'data-toggle='modal' data-target='#Excluir$linha[quantidade]'><b>Excluir</b></a></td>
                                                           
                                                    </tr>";
                        $contador++;
                                 
                          echo"
                          <form action='../Controle/listaControle.php' method='POST'>
                          <div class='modal fade' id='Excluir$linha[quantidade]' tabindex='-1' role='dialog'
                              aria-labelledby='exampleModalLabel' aria-hidden='true'>
                              <div class='modal-dialog' role='document'>
                                  <div class='modal-content'>
                                      <div class='modal-header'>
                                          <h5 class='modal-title' id='exampleModalLabel'>Deletar</h5>
                                          <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                              <span aria-hidden='true'>&times;</span>
                                          </button>
                                      </div>
                                      <div class='modal-body'>
                                          <h2>Tem certeza que deseja excluir da lista?</h2>
  
                                      </div>
                                      <div class='modal-footer'>
  
  
                                          <input type='hidden' name='codigo' value='$linha[codigo]'>
  
  
                                          <button type='button' class='btn btn-secondary'
                                              data-dismiss='modal'>Não</button>
                                              <button type='submit' name='opcao' value='Excluir'  class='btn btn-primary'>sim</buttons>
  
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </form>";
                    }
                    ?>
                    <!-- Modal  Deletar-->
                    
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class=" py-3 bg-light ">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 text-center d-md-flex align-items-center ">
                    <ul class="nav mx-md-auto d-flex justify-content-center ">
                        <li class="nav-item "> <a class="nav-link active " href="# ">Home</a> </li>
                    </ul>
                    <div class="row ">
                        <div class="col-md-12 d-flex align-items-center justify-content-md-between justify-content-center my-2 ">
                            <a href="# ">
                                <i class="d-block fa fa-facebook-official text-muted fa-lg mx-2 "></i>
                            </a>
                            <a href="# ">
                                <i class="d-block fa fa-instagram text-muted fa-lg mx-2 "></i>
                            </a>
                            <a href="# ">
                                <i class="d-block fa fa-twitter text-muted fa-lg ml-2 "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12 text-center ">
                    <p class="mt-2 mb-0 ">©&nbsp; All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous ">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js " integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut " crossorigin="anonymous ">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous " style=" "></script>
  
</body>

</html>