<?php include("conecta.php"); 
?>

<!DOCTYPE html>
<hmtl id="html-home">
    
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../Assets/CSS/estilos.css">
        <link rel="stylesheet" href="../Assets/bootstrap/CSS/bootstrap.min.css">
         <link rel="icon" href="../assets/images/icon.png" type="image/x-icon"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link href="../assets/js/jquery.js">
        <title>Oreman Motors - Home</title>
    </head>
    
    <body id="body-home">
        
        <!--MENU BEGIN-->
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
                      <ul id="menu"  class="nav navbar-nav">
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
		
        <!--MENU END-->
        <section id="teste-js" >                    
        <main id="main-home">

        <!--HOME SLIDESHOW BEGIN-->

            <section id="slideshow-Homepage">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>
                    <!------------------------>
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <figure class="item active">
                            <img src="../assets/images/carro1-slide.jpg" class="img-fluid imgfld-home bigImg" alt="Responsive image">
                            <figcaption class="carousel-caption">
                                <h1>Lamborghini Aventador</h1>
                                <p>Luxo com potência.</p>
                            </figcaption>
                        </figure>
                        <figure class="item">
                            <img src="../assets/images/interior-slide.jpg" class="img-fluid imgfld-home bigImg" alt="Responsive image">
                            <figcaption class="carousel-caption">
                                <h1>Interiores Personalizados</h1>
                                <p>Dê sua cara para seu veículo.</p>
                            </figcaption>
                        </figure>
                        <figure class="item">
                            <img src="../assets/images/carro2-slide.png"     class="img-fluid imgfld-home bigImg" alt="Responsive image">
                            <figcaption class="carousel-caption">
                                <h1>"Carros merecem ser bem feitos"</h1>
                                <cite>Enzo Ferrari.</cite>
                            </figcaption>
                        </figure>
                    <figure class="item">
                            <img src="../assets/images/carro3-slide.jpg" class="img-fluid imgfld-home bigImg" alt="Responsive image">
                            <figcaption class="carousel-caption">
                                <h1>Volvo V40</h1>
                                <p>A diferença está nos detalhes.</p>
                            </figcaption>
                        </figure>
                    </div>
                    <!------------------------>
                    
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <i class="fa fa-arrow-circle-o-left direcao fa-3x" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <i class="fa fa-arrow-circle-o-right direcao fa-3x" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>
         </section>

            <!--HOME SLIDESHOW END-->

            <!--HOME HIGHLIGHTS BEGIN-->
            <div id="highlights">
            <h2 class="high-texto">Nossos Destaques</h2>
            </div>
              <div class="container">
                <div class="row row-home">
                   <?php 
                      $dep = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY albumid DESC LIMIT 4");
                      while ($mostruario = mysqli_fetch_assoc($dep)) {
                    ?>
                  <div class="col-sm-6">
                    <div class="card destaque">
                      <div class="card-body">
                        <img src="upload/<?php echo $mostruario["capa"] ?>" width="600" class="img-fluid img-responsive imgfld-home bigImg" alt="Responsive image">
                        <p class="card-text">
                            <strong><?php echo $mostruario["nome"] ?></strong><br>
                            <?php echo $mostruario["descricao"] ?><br>
                          </p>
                        <a href="produtos-detalhes.php?albumid=<?php echo $mostruario["albumid"]?>" class="btn btn-danger">Ver Detalhes</a>
                      </div>
                    </div>
                  </div>  
                    <?php } ?>   

                 </div>
              </div>


                <!--HOME HIGHLIGHTS END-->

        </main>
        
        
<body id="body-footer" class="footer-localizacao-home">

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
        
        <!--HERE ENDS THE FOOTER-->
        
        <!--ADDING JQUERY/JAVASCRIPT-->
        <script src="../assets/js/jquery.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js~HEAD"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	   <script src="../assets/bootstrap/js/bootstrap.js"></script>
	   <script src="../assets/js/collapse-navebar.js"></script>
       <!------------------------>
        
    </body>
</hmtl>