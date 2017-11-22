
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/reset.css"> <!-- reset-->
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css"> <!-- link para acessar a pasta de css do bootstrap-->
    <meta name="viewport"  content="width=device-width,initial-scale=1"> <!--Ajusta o site para o tamanho do dispositivo-->
    <title>OREMAN MOTORS</title>
    <link rel="icon" href="../assets/images/icon.png" type="image/x-icon"/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">

  </head>
  <body class="body-login">
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
          <div id="teste-js">
            <div class="container  login-form">
                   <form class="form-horizontal teste" action="login-acesso.php" method="POST">
                      <h2 id="tit-h2a" >Bem vindo!</h2>
                      <div class="form-group">
                        <label for="#" id="frase-contato" class="col-sm-3 control-label">Email:</label>
                        <div class="col-sm-7">
                          <input type="email" class="form-control" id="inputPassword3" name="email" placeholder="Digite aqui">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="#" id="frase-contato" class="col-sm-3 control-label"  >Senha:</label>
                        <div class="col-sm-7">
                          <input type="password" class="form-control" id="inputEmail3" placeholder="Digite aqui" name="senha">
                        </div>
                      </div>
                       <div align="center">
                          <button type="submit" class="btn btn-default" id="bot-enviar">ENTRAR</button>
                      </div>
                </form>         
            </div>
        </div>
  </body>  
  <div class="footer-login">
    <footer id="footer" id="body-footer" >
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
  </div>
        
        <!--HERE ENDS THE FOOTER-->
   <script src="../assets/js/jquery.js"></script>
   <script src="../assets/bootstrap/js/bootstrap.min.js~HEAD"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
   <script src="../assets/bootstrap/js/bootstrap.js"></script>
   <script src="../assets/js/collapse-navebar.js"></script>
</html>