<?php include("conecta.php");
include("banco-produtos.php") ?>

<html>

<?php
session_start();

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];
$capa = $_POST["imagem"];
$id = $_POST["id"];



	AlteraProduto($conexao,$nome,$descricao,$preco,$categoria,$capa,$id);
    header("Location:lista-produtos.php?alterado=true");
    die();
    ?>





</html>