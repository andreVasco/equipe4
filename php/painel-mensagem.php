<?php
include("conecta.php"); 
session_start();

if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
    header('location:login.php');
    exit(); 
}

?>

<!DOCTYPE html>
<html class="html-produtos">

    <head>
        <meta charset="utf-8">
        <meta name="viewport"  content="width=device-width,initial-scale=1"> <!--Ajusta o site para o tamanho do dispositivo-->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../assets/css/reset.css"> <!-- reset-->
        <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css"> <!-- link para acessar a pasta de css do bootstrap-->
        <link rel="stylesheet" type="text/css" href="../assets/css/estilos .css">
        <title>Painel administrativo</title>
        <link rel="icon" href="../assets/images/icon.png" type="image/x-icon"/>
        <link rel="icon" href="../assets/images/icon.png" type="image/x-icon"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="../assets/css/animate.css">


    </head>
    <!--COMEÇO DO CORPO-->
    <body class="body-produtos">
         <header class="body-menu">
             
            <h1 class="titulo-painel">Painel admnistrativo</h1>
            <img src="../assets/images/icon.png" class="logo-painel left">
            <img src="../assets/images/icon.png" class="logo-painel right">         
        </header>
        <div class="menu-vertical-painel">
            <ul class="painel-lista-vertical">
                <li class="item-painel"><a class="link-painel" href="cadastro-carros.php">Adicionar Produto</a></li>
                <li class="item-painel"><a class="link-painel" href="lista-produtos.php">Alterar/Remover Produto</a></li>
                <li class="item-painel"><a class="link-painel" href="cadastro-login.php">Adicionar Login</a></li>
                <li class="item-painel"><a class="link-painel" href="lista-login.php">Alterar/Remover Login</a></li>
                <li class="item-painel"><a class="link-painel" href="painel-mensagem.php">Mensagens recebidas</a></li>
                <li class="item-painel"><a class="link-painel logout" href="logout.php">Sair</a></li>
            </ul>
        </div>
    
    <!--FIM DO ESQUELETO DO PAINEL ADMINISTRATIVO-->
    
    
    <?php
    //ABRE A CONEXÃO COM O BANCO DE DADOS
    $conexao = mysqli_connect('localhost', 'root','', 'oreman');

    //FUNÇÃO QUE LISTA AS MENSAGENS
    function listaMensagens($conexao) {
        $mensagens = array();
        $resultado = mysqli_query($conexao, "select * from contato");
        while($mensagem = mysqli_fetch_assoc($resultado)) {
            array_push($mensagens, $mensagem);
        }
    return $mensagens;
    }

        
    //RECEBE O RETORNO DA FUNÇÃO E MOSTRA PRO ADMINISTRADOR 
    ?>
        
    <table class="table table-striped table-bordered">
    <?php 
        $mensagens = listaMensagens($conexao);
        foreach($mensagens as $mensagem){ ?>
            <tr>
                <td><?=$mensagem['nome']?></td>
                <td><?=$mensagem['mensagem']?></td>
            </tr>
        <?php 
            }
        ?>   
    </table>
        
</body>

</html>