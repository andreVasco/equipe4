<?php
session_start();

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$mensagem = $_POST["mensagem"];

//abre a conexão
$conexao = mysqli_connect('localhost', 'root','', 'oreman');

//cria a query
$query = "insert into contato (nome, email, telefone, mensagem) values ('{$nome}', '{$email}', {$telefone}, '{$mensagem})";

//executa a query criada
mysqli_query($conexao, $query);

//verifica sucesso ou falha
if(mysqli_query($conexao, $query)) { 
?>
    <p class="alert-success">
        Mensagem enviada com sucesso!
    </p>

<?php } else { 
    
$msg = mysqli_error($conexao);?>

    <p class="alert-danger">
        ERRO: Sua mensagem não foi enviada.  <?= $msg ?>
    </p>

<?php } ?>

?>



