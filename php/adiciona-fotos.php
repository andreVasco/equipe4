<?php include("conecta.php");

$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
  <head>
    <meta name="viewport"  content="width=device-width,initial-scale=1"> <!--Ajusta o site para o tamanho do dispositivo-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/reset.css"> <!-- reset-->
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css"> <!-- link para acessar a pasta de css do bootstrap-->
    <link rel="stylesheet" type="text/css" href="../assets/css/estilos.css">
    <title>OREMAN MOTORS</title>
    <link rel="icon" href="../assets/images/icon.png" type="image/x-icon"/>
    
</head>
</head>
<body>
  <!--INCLUINDO O ESQUELETO DO PAINEL-->
         <?php include("painel.php"); ?>
        <h2 id="add_foto" align="center">Adicionar foto ao album:</h2>
          <form action="album-fotos.php?id=<?php echo $id ?>" method="post" >
            <form action="upload-foto.php" method="post" enctype="multipart/form-data">
            <div align="center">
              <label for="imagem">Imagem:</label><br>
              <input class="selecionar-arquivo" type="file" name="imagem" value="Carregar imagem" >
              </div>
              <div align="center">
              <button type="submit" class="btn btn-default" name="submit" id="bot-enviar">CADASTRAR</button>
            </div>
          </form>
        </form>         
</html>