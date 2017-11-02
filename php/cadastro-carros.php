<?php include("conecta.php"); ?>
 
 <html>
 	<head>
		<meta charset="utf-8">
		<meta name="viewport"  content="width=device-width,initial-scale=1"> <!--Ajusta o site para o tamanho do dispositivo-->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../assets/css/reset.css"> <!-- reset-->
		<link rel="stylesheet" type="text/css" href="../assets/css/cadastro-carros.css">
		<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css"> <!-- link para acessar a pasta de css do bootstrap-->
		<title>OREMAN MOTORS</title>
		<link rel="icon" href="../assets/images/icon.png" type="image/x-icon"/>
	</head>
	<!--COMEÇO DO CORPO-->
	<body>
		<div class="panel panel-default" >
			<div class="panel-body">
				<div class="container cadastro-carros" >
					<h2 id="titulo-cadastro">CADASTRAR/ALTERAR PRODUTOS</h1>
					<form method="post" action="adiciona-carros.php">
					<tr>
					    <td>Nome:</td>
					    <td><input class="form-control" type="text" name="nome" /></td>
					    <td>Descrição:</td>
					    <td><textarea class="form-control" name="descricao"></textarea></td>
					     <td>Link da foto de capa:</td>
					    <td><input class="form-control" type="text" name="capa"/></td>
					    <td>Preço:</td>
					    <td><input class="form-control" type="number" name="preco"/></td>
					    <td>Categoria</td>
					    <td><input class="form-control" type="text" name="categoria"/></td>
					    <div align="center" >
						<button type="submit" class="btn btn-default" id="bot-cad" >CADASTRAR</button>
						</div>
				    </tr>
				    </form>
				</div>
			</div>
		</div>
	
</body>

</html>


