<?php
include 'conexaoBD.php';
function cadastroLista($descricao, $quantidade)
{
     connect();
    query("INSERT INTO lista (descricao, quantidade) values ('$descricao',$quantidade)");
    close();
}
function recebeCodigo($codigo){
    return $codigo;
}
function mostrarLista()
{
    connect();
    $resultado = query("SELECT * FROM Lista");
    close();
    return $resultado;
}
function MostraListaAlterar($codigo)
{


    connect();
    $resultado = query("SELECT * FROM LISTA WHERE CODIGO=$codigo");
    close();
    return $resultado;
}
function AlterarLista($codigo, $descricao, $quantidade)
{
    connect();
    $resultado = query("UPDATE Lista SET descricao='$descricao',quantidade=$quantidade WHERE codigo=$codigo");
    close();
    return $resultado;
}
function ExcluirLista($codigo)
{
    connect();
    $resultado = query("DELETE FROM Lista  WHERE codigo=$codigo");
    close();
    return $resultado;
}
