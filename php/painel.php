<?php
include("conecta.php"); 
session_start();
if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
	header('location:login.php');
	exit();	
}
else {
}
?>




<header class="body-menu">             
	<h1 class="titulo-painel">Painel admnistrativo</h1>
	<img src="../assets/images/logo.png" class="logo-painel left">
	<img src="../assets/images/logo.png" class="logo-painel right">        
</header>
<div class="menu-vertical-painel">
	<ul class="painel-lista-vertical">
		<li class="item-painel"><a class="link-painel addcar" href="cadastro-carros.php">Adicionar Produto</a></li>
		<li class="item-painel"><a class="link-painel" href="lista-produtos.php">Editar Produto</a></li>
		<li class="item-painel"><a class="link-painel" href="cadastro-login.php">Adicionar Login</a></li>
		<li class="item-painel"><a class="link-painel" href="lista-login.php">Editar Login</a></li>
		<li class="item-painel"><a class="link-painel linkmsg" href="painel-mensagem.php">Mensagens </a></li>
		<li class="item-painel"><a class="link-painel logout" href="logout.php">Sair</a></li>
	</ul>
</div>