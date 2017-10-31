<?php include("conecta.php"); ?>

<?php
session_start();

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$mensagem = $_POST["mensagem"];

$query = "insert into contato (nome, email, telefone, mensagem) values ('{$nome}', '{$email}', '{$telefone}' , '{$mensagem})";

if(mysqli_query($conexao, $query)) { 
?>
    <p class="alert-success">
        Mensagem enviada com sucesso!
    </p>

<?php } else { ?>

    <p class="alert-danger">
        ERRO: Sua mensagem não foi enviada.
    </p>

<?php } ?>

?>



