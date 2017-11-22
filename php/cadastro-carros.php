<?php
include("conecta.php"); 
?>



 
 <html>
 	<head>
		<meta charset="utf-8">
		<meta name="viewport"  content="width=device-width,initial-scale=1"> <!--Ajusta o site para o tamanho do dispositivo-->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../assets/css/reset.css"> <!-- reset-->
  		<link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">
		<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css"> <!-- link para acessar a pasta de css do bootstrap-->
		<title>OREMAN MOTORS</title>
		<link rel="icon" href="../assets/images/icon.png" type="image/x-icon"/>
	</head>
	<!--COMEÇO DO CORPO-->
	<body class="body-login">
    
    <!--INCLUINDO O ESQUELETO DO PAINEL-->
         <?php include("painel.php"); ?>

    <!--FORMULARIO DE CADASTRO DE VEICULOS-->     
    <div class="container  login-form">
        <form class="form-horizontal form-cadastro-carro" method="post" action="adiciona-carros.php">
          <h2 class="subtitulo-painel" >CADASTRAR CARRO</h2>
          <div class="form-group">
            <label for="#" id="campo-cadastrocarro" class="col-sm-3 control-label">Nome:</label>
            <div class="col-sm-7">
              <input class="form-control" type="text" name="nome" placeholder="Digite aqui">
            </div>
          </div>
          <div class="form-group">
            <label for="#" id="campo-cadastrocarro" class="col-sm-3 control-label">Descricao:</label>
            <div class="col-sm-7">
              <textarea class="form-control" type="text"  name="descricao" placeholder="Digite aqui"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="#" id="campo-cadastrocarro" class="col-sm-3 control-label">Preço:</label>
            <div class="col-sm-7">
              <input class="form-control" type="number" name="preco" placeholder="Digite aqui">
            </div>
          </div>
          <div class="form-group">
            <label for="#" id="campo-cadastrocarro" class="col-sm-3 control-label">Categoria:</label>
            <div class="col-sm-7">
              <input class="form-control"  type="text" name="categoria"  placeholder="Digite aqui">
            </div>
          </div>
          <form action="upload.php" method="post" enctype="multipart/form-data">
            <div align="center">
              <label for="imagem">Imagem:</label>
              <input class="selecionar-arquivo" type="file" required name="imagem" value="Carregar imagem" >
            </div>

            <div align="center">
              <button type="submit" class="btn btn-default" name="submit" id="bot-enviar">CADASTRAR</button>
            </div>
          </form>
        </form>         
      </div>
    </div>
  </body>  
					    
</html>


