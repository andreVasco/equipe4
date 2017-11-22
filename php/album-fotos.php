
<html>

<?php

$msg= false;
$id =  $_GET['id'];
$imagem = $_POST["imagem"];



//abre a conexão
$conexao = mysqli_connect('localhost', 'root','', 'oreman');

//cria a query
$query = "INSERT INTO detalhesproduto (albumid, endereco) VALUES ({$id}, '{$imagem}') ";

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
