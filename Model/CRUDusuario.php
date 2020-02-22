<?php 
include 'conexaoBD.php';
    function CadastrarUsuario($nome, $senha){


        connect();
        query("INSERT INTO usuario (nome,senha) VALUES ('$nome','$senha')");
        
        close();

    }
    function BuscarUsuario($nome){
    connect();
    $resultado=query("SELECT * FROM usuario WHERE nome='$nome'");
    close();
    return $resultado;
    }
    ?>