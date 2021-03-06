<?php
include("conecta.php"); 
?>



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
    <!-- inclui o escopo do painel -->
    <?php include("painel.php") ?>

    <div id="teste-js">
      <h2 class="subtitulo-painel" >Cadastro</h2>
       <div class="container  login-form">
                   <form class="form-horizontal form-add-login" action="adiciona-login.php" method="POST">
                      
                      <div class="form-group">
                        <label for="#" id="campo-cadastrologin" class="col-sm-3 control-label">Usuário:</label>
                        <div class="col-sm-7">
                          <input type="text" class="form-control" id="inputPassword3" name="usuario" placeholder="Digite aqui">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="#" id="campo-cadastrologin" class="col-sm-3 control-label">Senha:</label>
                        <div class="col-sm-7">
                          <input type="password" class="form-control" id="inputEmail3" name="senha" placeholder="Digite aqui">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="#" id="campo-cadastrologin" class="col-sm-3 control-label">Email:</label>
                        <div class="col-sm-7">
                          <input type="email" class="form-control" id="inputPassword3" name="email" placeholder="Digite aqui">
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