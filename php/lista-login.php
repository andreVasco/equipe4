<?php include("conecta.php");
include("banco-produtos.php") ?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/produtos.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">
</head>
<body>
	<?php include("painel.php"); ?>
	<?php 
		if (array_key_exists("alterado", $_GET) && $_GET["alterado"] == 'true') { ?>
			<p class="alert-success" align="center">Usuário alterado com sucesso!</p>	
	<?php }  ?>
	<?php 
		if (array_key_exists("cadastro", $_GET) && $_GET["cadastro"] == 'true') { ?>
			<p class="alert-success" align="center">Usuario cadastrado com sucesso!</p>	
	<?php }  ?>

	<?php 
		if (array_key_exists("removido", $_GET) && $_GET["removido"] == 'true') { ?>
			<p class="alert-success" align="center">Usuário removido com sucesso!</p>	
	<?php }  ?>

	<div class="container listalogin">
		<div class="row">
			<?php ListaLogin($conexao); ?> 
		</div>
	</div>

</body>
</html>