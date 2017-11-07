<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/produtos.css">
</head>
<body>

<?php
session_start();

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$email = $_POST["email"];

$senhamd5 = md5($senha);

//abre a conexão
include("conecta.php"); 

//cria a query
$query = "INSERT INTO  usuario (usuario, senha, email) VALUES ('{$usuario}', '{$senhamd5}', '{$email}')";

//verifica sucesso ou falha
if(mysqli_query($conexao, $query)) { 

	header("Location:lista-login.php?cadastro=true");
    die();
  }

 else { 
    
$msg = mysqli_error($conexao);?>

    <p align="center" class="text-danger">
        ERRO! Usuário não cadastrado!  
    </p>

<?php } ?>
</body>
</html>