<!DOCTYPE html>
<html>
<head>
        <link type="text/css" rel="stylesheet" href="../assets/css/escopo-painel.css">
        <link type="text/css" rel="stylesheet" href="../assets/css/painel-mensagem.css">
        <link rel="icon" href="../assets/images/icon.png" type="image/x-icon"/>
        <link rel="stylesheet" href="../Assets/bootstrap/CSS/bootstrap.min.css">
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
        <title>Painel Administrativo - OREMAN</title>
</head>
<body class="conteudo-painel-mensagens">
    
    <!--INICIO DO ESQUELETO DO PAINEL ADMINISTRATIVO-->
    
     <img src="../asset/images/logo-brand.png">
        <h1 class="titulo-painel-adm">PAINEL ADMINISTRATIVO</h1>
        <nav >
        <div class="menu-vertical-painel">
        <ul class="painel-lista-vertical">
            <li class="item-painel"><a class="link-painel" href="painel-inicio.php">Início</a></li>
            <li class="item-painel"><a class="link-painel" href="painel-produtos.php">Produtos</a></li>
            <li class="item-painel"><a class="link-painel" href="painel-mensagens.php">Mensagens</a></li>
            <li class="item-painel"><a class="link-painel" href="#">Não Sei</a></li>
            <li class="item-painel"><a class="link-painel" href="#">Não Sei</a></li>
            <li class="item-painel"><a class="link-painel" href="#">Sair</a></li>
        </ul>
        </div>
        </nav>
    
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

    //RECEBE O RETORNO DA FUNÇÃO E MOSTRA PRO ADMINISTRADOR ?>
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