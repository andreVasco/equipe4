<html>

<?php
session_start();

$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$capa = $_POST["imagem"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];


//abre a conexão
$conexao = mysqli_connect('localhost', 'root','', 'oreman');

//cria a query
$query = "INSERT INTO  produtos (nome, descricao, capa, preco, categoria) VALUES ('{$nome}', '{$descricao}', '{$capa}', {$preco}, '{$categoria}')";

//verifica sucesso ou falha
if(mysqli_query($conexao, $query)) { 

	header("Location:lista-produtos.php?cadastro=true");
    die();
  }

 else { 
    
$msg = mysqli_error($conexao);?>

    <p align="center" class="text-danger">
        ERRO! Produto não cadastrado!  
    </p>

<?php } ?>

</html>