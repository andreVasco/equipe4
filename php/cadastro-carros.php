<?php include("conecta.php"); ?>

 
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
    <!-- PAINEL INICIO -->

    <header class="body-menu">
             
            <h1 class="titulo-painel">Painel admnistrativo</h1>
            <img src="../assets/images/icon.png" class="logo-painel left">
            <img src="../assets/images/icon.png" class="logo-painel right">         
        </header>
        <div class="menu-vertical-painel">
            <ul class="painel-lista-vertical">
                <li class="item-painel"><a class="link-painel" href="cadastro-carros.php">Adicionar Produto</a></li>
                <li class="item-painel"><a class="link-painel" href="lista-produtos.php">Alterar/Remover Produto</a></li>
                <li class="item-painel"><a class="link-painel" href="cadastro-login.php">Adicionar Login</a></li>
                <li class="item-painel"><a class="link-painel" href="lista-login.php">Alterar/Remover Login</a></li>
                <li class="item-painel"><a class="link-painel" href="painel-mensagem.php">Mensagens recebidas</a></li>
                <li class="item-painel"><a class="link-painel logout" href="logout.php">Sair</a></li>
            </ul>
        </div>
    
    <!-- PAINEL FIM-->
            <div class="container  login-form">
                   <form class="form-horizontal teste" method="post" action="adiciona-carros.php">
                      <h2 id="tit-h2" >CADASTRAR CARRO</h2>
                      <div class="form-group">
                        <label for="#" id="frase" class="col-sm-3 control-label">Nome:</label>
                        <div class="col-sm-7">
                          <input class="form-control" type="text" name="nome" placeholder="Digite aqui">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="#" id="frase" class="col-sm-3 control-label">Descricao:</label>
                        <div class="col-sm-7">
                          <textarea class="form-control" type="text"  name="descricao" placeholder="Digite aqui"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="#" id="frase" class="col-sm-3 control-label">Capa:</label>
                        <div class="col-sm-7">
                          <input class="form-control" type="text" name="capa" placeholder="Digite aqui">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="#" id="frase" class="col-sm-3 control-label">Preço:</label>
                        <div class="col-sm-7">
                          <input class="form-control" type="number" name="preco" placeholder="Digite aqui">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="#" id="frase" class="col-sm-3 control-label">Categoria:</label>
                        <div class="col-sm-7">
                          <input class="form-control"  type="text" name="categoria"  placeholder="Digite aqui">
                        </div>
                      </div>
                       <div align="center">
                          <button type="submit" class="btn btn-default" id="bot-enviar">CADASTRAR</button>
                      </div>
                </form>         
            </div>
        </div>
  </body>  
					    
</html>


