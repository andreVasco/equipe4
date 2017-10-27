<?php include("adiciona-carros.php"); ?>

<?php include("conecta.php");
$resultado = mysqli_query($conexao, "select * from produtos");
while ($produto = mysqli_fetch_assoc($resultado)) {

 ?>
 
 <html>
 	<head>
		<meta charset="utf-8">
		<meta name="viewport"  content="width=device-width,initial-scale=1"> <!--Ajusta o site para o tamanho do dispositivo-->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../assets/css/reset.css"> <!-- reset-->
		<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css"> <!-- link para acessar a pasta de css do bootstrap-->
		<title>OREMAN MOTORS</title>
		<link rel="icon" href="../assets/images/icon.png" type="image/x-icon"/>
	</head>
	<!--COMEÇO DO CORPO-->
	<body>
	 <tr>
	    <td>Nome</td>
	    <td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>" /></td>
	</tr>
	<tr>
	    <td>Categoria</td>
	    <td>
	        <select class="form-control" name="categoria_id">
	            <?php foreach($categorias as $categoria) :
	                $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
	                $selecao = $essaEhACategoria ? "selected='selected'" : "";
	            ?>
	                <option value="<?=$categoria['id']?>" <?=$selecao?>>
	                    <?=$categoria['nome']?>
	                </option>
	            <?php endforeach ?>
	        </select>
	    </td>
	</tr>
	<tr>
	    <td>Descrição</td>
	    <td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
	</tr>
	<tr>
	    <td>Preço</td>
	    <td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>" /></td>
	</tr>
	<tr>
	    <td>Endereço</td>
	    <td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>" /></td>
	</tr>
	<tr>
	    <td></td>
	    <td><input type="checkbox" name="usado" <?=$usado?> value="true"> Usado
	</tr>
</body>

</html>


