<?php include("conecta.php");
include("banco-produtos.php") ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">	
</head>
<body>
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

	<div class="container">
		<div class="row">
			<?php ListaProdutos($conexao); ?> 
		</div>
	</div>


</body>
</html>