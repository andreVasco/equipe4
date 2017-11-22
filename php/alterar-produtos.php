<?php include("conecta.php");
include("banco-produtos.php"); 

$id = $_GET['id'];
$produto = BuscaProduto($conexao, $id);


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
    <body class="body-produtos">
    <!--INCLUINDO O ESQUELETO DO PAINEL-->
         <?php include("painel.php"); ?>
            <div class="container  login-form">
                   <form class="form-horizontal form-altera-carro" method="post" action="altera-carro.php">
                   	 <h2 id="tit-h2" >ALTERAR CARRO</h2>
            
                   	  <div class="form-group">
                        <label for="#" id="frase" class="col-sm-3 control-label">Nome:</label>
                        <div class="col-sm-7">
                          <input class="form-control" type="text" name="nome"  value="<?=$produto['nome']?>" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="#" id="frase" class="col-sm-3 control-label">Descricao:</label>
                        <div class="col-sm-7">
                          <textarea class="form-control" type="text"  name="descricao"><?=$produto['descricao'] ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="#" id="frase" class="col-sm-3 control-label">Preço:</label>
                        <div class="col-sm-7">
                          <input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="#" id="frase" class="col-sm-3 control-label">Categoria:</label>
                        <div class="col-sm-7">
                          <input class="form-control"  type="text" name="categoria"  value="<?=$produto['categoria']?>" >
                        </div>
                      </div>
                      <div>
                          <input class="form-control" type="hidden" name="id"  value="<?=$produto['albumid']?>" >
                      </div>
                       <form action="upload.php" method="post" enctype="multipart/form-data">
                        <div align="center">
                        <label  for="imagem">Imagem:</label>
                          <input  type="file" required name="imagem"  value="<?=$produto['capa']?>" >
                        </div>
                           <div align="center">
                          <button type="submit" class="btn btn-default" name="submit" id="bot-enviar">Alterar</button>
                      </div>
                      </form>
                </form>         
            </div>
        </div>
  </body>  
					    
</html>

