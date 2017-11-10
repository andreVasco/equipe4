<!DOCTYPE html>
<html class="html-localizacao">
	<head >
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../assets/css/reset.css"> <!-- reset-->
		<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css"> <!-- link para acessar a pasta de css do bootstrap-->
		<link rel="stylesheet" type="text/css" href="../assets/css/estilos.css"> 
		<meta name="viewport"  content="width=device-width,initial-scale=1"> <!--Ajusta o site para o tamanho do dispositivo-->
		<title>OREMAN MOTORS</title>
		<link rel="icon" href="../assets/images/icon.png" type="image/x-icon"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <link rel="stylesheet" href="../assets/css/animate.css">

	</head>
	<body class="body-localizacao">
		<!--MENU-->
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
		<!--FIM DO MENU-->
		<!--MAPA E ENDEREÇO-->
		<section  id="teste-js" class="container-fluid " >
			<div  class=" complemento  animated bounceInLeft">
				<!-- <h2 id="titulo-h2-localizacao" >Localização:</h2> -->
					<address>
					<div id="endereco-localizacao">
						 <div id="oreman"> <strong>Oreman Motors</strong><br></div>
						  Via local, nº xx, São Pedro<br>
						  Juiz de fora-MG<br>
						  <abbr title="Phone">Telefone:</abbr> (XX) XXXX-XXXX<br>
						</address>
					</div>
			</div>
					<iframe id="mapa-localizacao" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.1161857728302!2d-43.37458818505456!3d-21.775763885598504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989ba18e76c0b9%3A0xb27885fe8e1192df!2sOreman+Motors!5e0!3m2!1spt-BR!2sus!4v1507832094067" width="600" height="450" frameborder="0" style="border:0" allowfullscreen class="img-responsive center-block ">
					</iframe>
		</section>
		<!--MAPA E ENDEEÇO-->
	</body>
		<!--FOOTER-->
	<div id="body-footer" class="footer-localizacao-loc">
	<!-- Footer comeca aqui -->
		<footer id="footer">
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
	</footer>
	<!-- Footer termina aqui -->
	<script src="../assets/js/jquery.js"></script>
	<!--adicionando o popper que estava apareceendo faltando na página-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="../assets/bootstrap/js/bootstrap.js"></script>
	<script src="../assets/js/collapse-navebar.js"></script>

</html>