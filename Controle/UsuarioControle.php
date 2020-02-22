
<?php
include '../Model/CRUDusuario.php';
if (isset($_POST["opcao"])) {

    $opcao = $_POST["opcao"];
}else{
    $opcao = $_GET["opcao"];
}
switch ($opcao) {
    case 'Cadastrar':
        $nome = $_POST['nome'];
        $senhaUsuario = sha1($_POST['senha']);
        CadastrarUsuario($nome, $senhaUsuario);
        header("Location: ../View/PaginaInicial.php");
        break;
    
        case 'Entrar':
        $nome = $_POST['nome'];
        $senhaUsuario = sha1($_POST['senha']);
      
        if (!$nome || !$senhaUsuario) {
            echo "<h1>Você deve digitar sua senha e login!</h1>
                    <a href=..../View/PaginaInicial.php>voltar</a>";
            exit;
        }

        $resultado = BuscarUsuario($nome);
        $linha = mysqli_fetch_assoc($resultado);
        if ($nome == $linha['nome']) {
            if ($senhaUsuario == $linha['senha']) {
                session_start();
                $_SESSION['nome'] = $nome;
                header("Location: ../View/logado.php");
            } else {
                echo "<script>alert('Senha Incorreta!');</script>";
                echo "<script>window.location='../View/PaginaInicial.php';</script>";
            }
        } else {
            echo "<script>alert('Nome Incorreto!');</script>";
            echo "<script>window.location='../View/PaginaInicial.php'; </script>";
        }
        break;

    case 'Sair':
        session_start();
        session_destroy();
        echo "<script>alert('Foi Desconectado da sessao!');</script>";
        echo "<script>window.location='../View/PaginaInicial.php'; </script>";

        break;
}
?>
