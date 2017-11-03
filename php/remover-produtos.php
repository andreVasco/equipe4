<?php include("conecta.php"); 
include("banco-produtos.php"); 
?>
<!DOCTYPE html>
<html>
	<?php

	$id = $_GET['id'];
	DeletaProduto($conexao , $id);

	header("Location:lista-produtos.php?removido=true");
	die();
	?>



</html>