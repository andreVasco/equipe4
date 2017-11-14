<?php include("conecta.php");
include("banco-produtos.php") ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">	
</head>
<body>
	<header class="body-menu">
             
            <h1 class="titulo-painel">Painel admnistrativo</h1>
            <img src="../assets/images/icon.png" class="logo-painel left">
            <img src="../assets/images/icon.png" class="logo-painel right">         
        </header>
        <div class="menu-vertical-painel">
            <ul class="painel-lista-vertical">
                <li class="item-painel"><a class="link-painel" href="cadastro-carros.php">Adicionar Produto</a></li>
                <li class="item-painel"><a class="link-painel" href="lista-produtos.php">Editar Produto</a></li>
                <li class="item-painel"><a class="link-painel" href="cadastro-login.php">Adicionar Login</a></li>
                <li class="item-painel"><a class="link-painel" href="lista-login.php">Editar Login</a></li>
                <li class="item-painel"><a class="link-painel" href="painel-mensagem.php">Mensagens </a></li>
                <li class="item-painel"><a class="link-painel logout" href="logout.php">Sair</a></li>
            </ul>
        </div>
	<?php 
		if (array_key_exists("alterado", $_GET) && $_GET["alterado"] == 'true') { ?>
			<p class="alert-success" align="center">Produto alterado com sucesso!</p>	
	<?php }  ?>
	<?php 
		if (array_key_exists("cadastro", $_GET) && $_GET["cadastro"] == 'true') { ?>
			<p class="alert-success" align="center">Produto cadastrado com sucesso!</p>	
	<?php }  ?>

	<?php 
		if (array_key_exists("removido", $_GET) && $_GET["removido"] == 'true') { ?>
			<p class="alert-success" align="center">Produto removido com sucesso!</p>	
	<?php }  ?>

	<div class="container ">
		<div class="row listaprod">
			<?php ListaProdutos($conexao); ?> 
		</div>
	</div>


</body>
</html>