<?php include ("conecta.php") 
$resultado = mysqli_query($conexao, "select * from produtos");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../assets/css/reset.css">
		<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css"> 
		<link rel="stylesheet" type="text/css" href="../assets/css/estilos.css"> 
		<meta name="viewport"  content="width=device-width,initial-scale=1"> 
		<link rel="icon" href="../assets/images/icon.png" type="image/x-icon"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../assets/css/animate.css">
		<link rel="icon" href="../assets/images/icon.png" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="../assets/css/footer.css">
		<link rel="stylesheet" type="text/css" href="../assets/css/menu1.css">
	<title>DETALHES DO PRODUTO</title>

</head>
	<!--COMEÇO DO CORPO-->
	<body class="info-produtos">
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
			                  <li class="nav-item"><a id="let" class="animated  zoomIn" href="home.html" target="_blank">Home</a></li>
			                  <li class="nav-item"><a id="let" class="animated  zoomIn"  href="quem-somos.html" target="_blank">Sobre nós</a></li>
			                  <li class="nav-item"><a id="let" class="animated  zoomIn"  href="produtos.html" target="_blank">Produtos</a></li>
			                  <li class="nav-item"><a id="let" class="animated  zoomIn" href="contato.html" target="_blank">Contato</a></li>
			                  <li class="nav-item"><a id="let" class="animated  zoomIn" href="localizacao.html" target="_blank">Localização</a></li>
			               	  <li class="nav-item"><a id="let" class="animated  zoomIn" href="login.html" target="_blank">Login</a></li>

			              </ul>
			              </div>

			        </div>    
		        </div>
		      </nav>
		</header>
		
	    <!--FIM DO MENU-->
	    <!--INICIO DA PAGINA DE DETALHES DO PRODUTO-->
		<?php
		$id=@$_GET["id"];
		$sel="select p.*,c.nome ao categorias from produtos p inner join categorias c on (p.idcategoria=c.id)where produtoid =".$id;
		

			$resutaldo = mysqli_query($conexao,$sel);
			$produto = mysqli_fetch_assoc($resultado);
		?>
		<div class="container">
		<h3><?php echo $produto["nome"]?></h3>
		<table class="table" align="center">
			<tr>
			<td>FOTO</td>
			<td>
				<img src="<?php echo $produto["endereco"]?>" width="200" /> <!--Pegando a imagem -->
				</td>
			</tr>
				<tr>
			<td>ID</td>
			<td><?php echo $produto["id"];?></td>			<!--Pegando o id do produto-->
				</tr>
			<tr>
			<td>NOME</td>
			<td><?php echo $produto["nome"];?></td>			<!--Pegando o nome do produto do banco de dados-->
			  </tr>
				<tr>
			<td>PREÇO</td>
			<td><?php echo $produto["valor"];?></td>
				</tr>
				<tr>
			<td>DESCRIÇÃO</td>
			<td><?php echo $produto["descricao"];?></td>
				</tr>
					<tr>
			<td>CATEGORIA</td>
			<td><?php echo $produto["categoria"];?></td>
				</tr>
				</table>
			</div>
		</body>
<!--FIM DA PAGINA DE DETALHES DE PRODUTO-->

		<!--FOOTER-->
	<div id="body-footer" class="footer-localizacao">
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
	</div>
	<!--FIM DO FOOTER-->
	<script src="../assets/js/jquery.js"></script>
	<!--adicionando o popper que estava apareceendo faltando na página-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="../assets/bootstrap/js/bootstrap.js"></script>
	<script src="../assets/js/collapse-navebar.js"></script>
</html>

