<?php

$produto = $_GET["prod"];

if ($_GET["prod"] == '')
	{
		header('location:produtos.php?');
	}

else {
	include("conecta.php");


 ?>
 

<!DOCTYPE html>
<html class="html-produtos">

	<head>
		<meta charset="utf-8">
		<meta name="viewport"  content="width=device-width,initial-scale=1"> <!--Ajusta o site para o tamanho do dispositivo-->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../assets/css/reset.css"> <!-- reset-->
		<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css"> <!-- link para acessar a pasta de css do bootstrap-->
		<link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">
		<title>OREMAN MOTORS</title>
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
			                  <li class="nav-item"><a id="let" class="animated  zoomIn" href="home.php" target="_blank">Home</a></li>
			                  <li class="nav-item"><a id="let" class="animated  zoomIn"  href="quem-somos.php" target="_blank">Sobre nós</a></li>
			                  <li class="nav-item"><a id="let" class="animated  zoomIn"  href="produtos.php" target="_blank">Produtos</a></li>
			                  <li class="nav-item"><a id="let" class="animated  zoomIn" href="contato.php" target="_blank">Contato</a></li>
			                  <li class="nav-item"><a id="let" class="animated  zoomIn" href="localizacao.php" target="_blank">Localização</a></li>
			               	  <li class="nav-item"><a id="let" class="animated  zoomIn" href="login.php" target="_blank">Login</a></li>

			              </ul>
			              </div>

			        </div>    
		        </div>
		      </nav>
		</header>
		
	    <!--FIM DO MENU-->
			<!--PÁGINA DE PRODUTOS-->
			<section  id="teste-js" class="container-fluid ">
				<form class="form-inline formulario-produtos" method="GET" action="pesquisa-produtos.php" >
							<div  class="form-group">
							<input id="pesquisa-produtos" type="text" name="prod" class="form-control" placeholder="Pesquisar"> 
							</div>
							<div id="bot-enter">
                   		    <button   type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
                   			</div>
							
					
							
					</form>

						<?php 
						$itens = mysqli_query($conexao, "SELECT * FROM produtos WHERE nome LIKE '{$produto}' OR descricao LIKE '{$produto}' OR capa LIKE '{$produto}' OR preco LIKE '{$produto}' OR categoria LIKE '{$produto}' ");

						
						?>
						<div class="row">
						<?php 
						$res = mysqli_num_rows($itens);
						if($res !== '')
						{
						while ($tot_itens = mysqli_fetch_array($itens))
						{ ?>
				  				<div class="col-sm-6 col-md-4 col-lg-3">
										<figure class="thumbnail box-produto">
											<img src="upload/<?php echo $tot_itens['capa']; ?>"  class="foto-produtos" alt="Carro preto">
												<figcaption class="caption">
													<h3 class="titulo-h3-produtos"><?php echo $tot_itens['nome'];  ?></h3>
													<p><a href="produtos-detalhes.php?albumid=<?php echo $tot_itens['albumid']; ?>" target="_blank" class="center-block btn btn-default btn-sm " role="button" id="info-produtos">+ Informação</a></p>
												</figcaption>
										</figure>
								</div>
				  <?php } } 

				  		if($res == '') {
				  			?>

				  			<p class="text-danger" align="center">Nada encontrado! <?php '$produto' ?> </p>

				  			<?php
				  		}
				  		?>

			</section>
	<!--FIM DA PÁGINA DE PRODUTOS-->
	<!--BOTÕES < > -->
			<div align="center" id="NeB">
					<div  class="btn-group" role="group" aria-label="...">
					  <button  type="button" class="btn btn-default"><</button>
					  <button  type="button" class="btn btn-default">></button>
					</div>
			</div>
		</div>	

	<!--FIM DOS BOTÕES < > -->
	</body>
<!--FIM DO CORPO-->
<!--FOOTER-->

	<!-- Footer comeca aqui -->
	<div id="body-footer" >
	<div  id="footer-produtos">
	<footer id="footer" >
		<div class="wrapper">
			<div class="footer-inicio">
				<ul class="icones-sociais">
					<li><a class="facebook" href="https://facebook.com/oremanmotors"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a class="twitter" href="https://twitter.com/oremanmotors"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a class="instagram" href="https://twitter.com/oremanmotors"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="footer-centro">
				<p class="footer-nome">Oreman Motors &copy; 2017</p>
				<p class="footer-cidade">Juiz de Fora - Brasil</p>
			</div>
			<div class="footer-fim">
				<p class="footer-email">contato@oremanmotors.com</p>
				<p class="footer-telefone">(12)3456-7890</p>
			</div>
		</div>
	</div>
	</footer>
	</div>
	<!--FIM DO FOOTER-->
	<script src="../assets/js/jquery.js"></script>
	<!--adicionando o popper que estava apareceendo faltando na página-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="../assets/bootstrap/js/bootstrap.js"></script>
	<script src="../assets/js/collapse-navebar.js"></script>


</html>

<?php } ?>