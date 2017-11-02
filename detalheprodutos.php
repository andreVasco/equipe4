<?php include ("conecta.php") 
$resultado = mysqli_query($conexao, "select * from produtos");
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
	<meta name="viewport"  content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/footer.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/menu1.css">
	<title>DETALHES DO PRODUTO</title>

	</head>
	<body>
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
				<img src="<?php echo $produto["endereco"]?>" width="200" />
				</td>
			</tr>
				<tr>
			<td>ID</td>
			<td><?php echo $produto["id"];?></td>
				</tr>
			<tr>
			<td>NOME</td>
			<td><?php echo $produto["nome"];?></td>
			  </tr>
				<tr>
			<td>PREÇO</td>
			<td><?php echo $produto["valor"];?></td>
				</tr>
				<tr>
			<td>DESCRIÇÃO</td>
			<td><?php echo $produto["descricao"];?></td>
				</tr>
				</table>
			</div>
		</body>
</html>

