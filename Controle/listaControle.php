<?php
include '../Model/CrudLista.php';
$opcao = $_POST["opcao"];
switch ($opcao) {
    case 'cadastrar':
        cadastroLista($_POST["descricao"], $_POST["quantidade"]);
        header("Location: ../View/cadastroLista.php");
        break;

    case 'cadastrarModal':
        cadastroLista($_POST["descricao"], $_POST["quantidade"]);
        header("Location: ../View/visualizarLista.php");
        break;
    case 'Editar':
        AlterarLista($_POST["codigo"], $_POST["descricao"], $_POST["quantidade"]);
        header("Location: ../View/visualizarLista.php");

        break;

    case 'Excluir':
        ExcluirLista($_POST["codigo"]);
        header("Location: ../View/visualizarLista.php");

        break;
}
