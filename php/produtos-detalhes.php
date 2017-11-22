<?php include("conecta.php"); 
$albumid = 	$_GET['albumid'];
?>

<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport"  content="width=device-width,initial-scale=1"> <!--Ajusta o site para o tamanho do dispositivo-->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../assets/css/reset.css"> <!-- reset-->
		<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css"> <!-- link para acessar a pasta de css do bootstrap-->
		<link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/lightbox.css">
		<title>OREMAN MOTORS</title>
		<link rel="icon" href="../assets/images/icon.png" type="image/x-icon"/>
		<link rel="icon" href="../assets/images/icon.png" type="image/x-icon"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <link rel="stylesheet" href="../assets/css/animate.css">
</head>
<body>
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
			                  <li class="nav-item"><a target="_self" id="let" class="animated  zoomIn" href="home.php" target="_blank">Home</a></li>
                          <li class="nav-item"><a target="_self" id="let" class="animated  zoomIn"  href="quem-somos.php" target="_blank">Sobre nós</a></li>
                          <li class="nav-item"><a target="_self" id="let" class="animated  zoomIn"  href="produtos.php" target="_blank">Produtos</a></li>
                          <li class="nav-item"><a target="_self" id="let" class="animated  zoomIn" href="contato.php" target="_blank">Contato</a></li>
                          <li class="nav-item"><a target="_self" id="let" class="animated  zoomIn" href="localizacao.php" target="_blank">Localização</a></li>
                          <li class="nav-item"><a target="_self" id="let" class="animated  zoomIn" href="login.php" target="_blank">Login</a></li>

			              </ul>
			              </div>

			        </div>    
		        </div>
		      </nav>
		</header>

		<?php
		$dados = mysqli_query($conexao, "SELECT produtos.nome, produtos.descricao, produtos.capa,  produtos.preco, produtos.categoria, detalhesproduto.id, detalhesproduto.endereco from produtos join detalhesproduto on produtos.albumid = detalhesproduto.albumid WHERE produtos.albumid like $albumid ");
		$basico =  mysqli_query($conexao, "SELECT * from produtos WHERE produtos.albumid like $albumid ");
			$inform = mysqli_fetch_assoc($basico);
			$info = mysqli_fetch_assoc($dados);
		?>

		<div class="detalhes-produtos">
			<div class="container-fluid" id="tamanho-coluna">		
				<div class="tamanho-textos">
					<div class="panel-group"  id="accordion" role="tablist" >
						  <div class="panel panel-default" id="teste-det" >
						    <div class="panel-heading" id="teste-det"  role="tab" id="headingOne">
						      <h4 class="panel-title">
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"  aria-controls="collapseOne">
						         <strong><div id="nome-parte-detalhes" align="center"> <?php echo $inform["nome"]?> </div></strong> 
						        </a>
						      </h4>
						    </div>
						    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						      <div class="panel-body">
						        <?php echo $inform["descricao"]?>
						      </div>
						    </div>
						  </div>
						  
						  <div class="panel panel-default" id="teste-det">
						    <div class="panel-heading" id="teste-det" role="tab" id="headingTwo">
						      <h4 class="panel-title" >
						        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          <strong><div id="nome-parte-detalhes" align="center">+ Detalhes</div></strong>
						        </a>
						      </h4>
						    </div>
						    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="panel-body">
						        Preço: <?php echo $inform["preco"]?> <br>
						        Categoria: <?php echo $inform["categoria"]?> <br>
						      </div>
						    </div>
						  </div>
			
					</div>
					<div class="embed-responsive embed-responsive-16by9">
  						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IEToKAELeqY" ></iframe>
					</div>
				</div>



			<section >
				<div id="imag-começo">
					<img src="upload/<?php echo $inform["capa"]?>" class="img-responsive"  id="foto-com" align="center" >
				</div>
			</section>

					<div class="row" id="li-detalhes">
							<div class="col-sm-6 col-md-4 col-lg-3" >
								<ul class="fotos-alb">
									<h2 id="tit-gal">Galeria:</h2>
									<li>
									<?php
									$lista = mysqli_query($conexao, "SELECT * from detalhesproduto join produtos on produtos.albumid = detalhesproduto.albumid  WHERE produtos.albumid like $albumid");
									 while ($info = mysqli_fetch_assoc($lista)) { ?>
										<a  href="upload/<?php echo $info["endereco"]; ?>" data-lightbox="roadtrip"><img src="upload/<?php echo $info["endereco"]; ?>" class="img-thumbnail" width="150" height="70" /></a>
										<?php } ?>
									</li>
								</ul>
							</div>
					</div>
			</div>
			
		
		


		<section class="container">
			<div class="p-mostruario">
		    	<h3 id="tit-mostruario"><i>Outros modelos:</i></h3>	
					<div class="row">
						<?php 
							$dep = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY preco DESC LIMIT 4");
							while ($mostruario = mysqli_fetch_assoc($dep)) {
						?>
		  				<div class="col-sm-6 col-md-4 col-lg-3">
								<figure class="thumbnail box-produto">
									<img src="upload/<?php echo $mostruario["capa"]; ?>"  class="foto-produtos" alt="Carro preto">
										<figcaption class="caption">
											<h3 class="titulo-h3-produtos"> <?php echo $mostruario["nome"]; ?> </h3>
											<p><a href="produtos-detalhes.php?albumid=<?php echo $mostruario['albumid']; ?>" target="_blank" class="center-block btn btn-default btn-sm " role="button" id="info-produtos">+ Informação</a></p>
										</figcaption>
								</figure>
						</div>
						<?php } ?>
					</div>
				</div>
		</section>




</body>

	<!--FIM DOS BOTÕES < > -->
<!--FIM DO CORPO-->
<!--FOOTER-->

	<!-- Footer comeca aqui -->
	<div class="footer-det" >
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
		<div>
		</footer>
	</div>
	<!--FIM DO FOOTER-->
	<script src="../assets/js/jquery.js"></script>
	<!--adicionando o popper que estava apareceendo faltando na página-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="../assets/bootstrap/js/bootstrap.js"></script>
	<script src="../assets/js/collapse-navebar.js"></script>
	<script src="../assets/js/lightbox.js"></script>


</html>

