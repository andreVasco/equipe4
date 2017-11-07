<?php include("conecta.php");
include("banco-produtos.php") ?>

<html>

<?php
session_start();

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$id = $_POST["id"];

	AlteraUsuario($conexao,$usuario,$senha,$email,$id);
    header("Location:lista-login.php?alterado=true");
    die();
    ?>





</html>