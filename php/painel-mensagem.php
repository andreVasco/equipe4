<?php
$conexao = mysqli_connect('localhost', 'root','', 'oreman');
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
		      <nav  class="navbar navbar-default">
		      	<div  class="container">
			        <div class="navegador-tamanho">
			          <div class="navbar-header">
			           <a href="home.html">
			              <img src="../assets/images/LogoTransparente1.png" class="d-inline-block align-top logo-menu" alt="Oreman motors">
			            </a>
			               <button type="button" class="navbar-toggle collapsed" id="botao-collapse-menu" data-toggle="collapse" data-target="#collapse-navbar" aria-expanded="false">
			                  <span class="sr-only">Toggle navigation</span>
			                  <span class="icon-bar"></span>
			                  <span class="icon-bar"></span>
			                  <span class="icon-bar"></span>
			               </button>
			          </div>
			              <div class="collapse navbar-collapse" id="collapse-navbar">
			              <ul id="menu"  class="nav navbar-nav ">
			                  <li class="nav-item"><a id="let"  href="cadastro-carros.php" target="_blank">Adicionar Carro</a></li>
			                  <li class="nav-item"><a id="let"  href="lista-produtos.php" target="_blank">Alterar/Remover Carro</a></li>
			                  <li class="nav-item"><a id="let"  href="cadastro-login.php" target="_blank">Adicionar Login</a></li>
			                  <li class="nav-item"><a id="let"  href="lista-login.php" target="_blank">Alterar/Remover Login</a></li>

			              </ul>
			              </div>

			        </div>    
		        </div>
		      </nav>
		    	  <div align="center">
					<button  class="btn btn-default">
					<a  href="logout.php">Sair</a>
					</button>
				  </div>
		</header>
		
    <!--FIM DO ESQUELETO DO PAINEL ADMINISTRATIVO-->
    
    
    <?php
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
        $mensagens-vetor = listaMensagens($conexao);
        foreach($mensagens-vetor as $mensagem){ ?>
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