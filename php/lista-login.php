<?php include("conecta.php");
include("banco-produtos.php") ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"  content="width=device-width,initial-scale=1"> <!--Ajusta o site para o tamanho do dispositivo-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/reset.css"> <!-- reset-->
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css"> <!-- link para acessar a pasta de css do bootstrap-->
    <link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">
    <title>Painel administrativo</title>
    <link rel="icon" href="../assets/images/icon.png" type="image/x-icon"/>
    <link rel="icon" href="../assets/images/icon.png" type="image/x-icon"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
</head>
<body>
	<!--INCLUINDO O ESQUELETO DO PAINEL-->
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

	<div class="container">
		<div class="row listalogin">
			<?php ListaLogin($conexao); ?> 
		</div>
	</div>

</body>
</html>