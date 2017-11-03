<?php include("conecta.php");
include("banco-produtos.php") ?>

<html>

<?php
session_start();

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$capa = $_POST["capa"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];
$id = $_POST["id"];



	AlteraProduto($conexao,$nome,$descricao,$capa,$preco,$categoria,$id);
    header("Location:lista-produtos.php?alterado=true");
    die();
    ?>





</html>