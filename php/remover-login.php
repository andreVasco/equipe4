<?php include("conecta.php"); 
include("banco-produtos.php"); 
?>
<!DOCTYPE html>
<html>
	<?php

	$id = $_GET['id'];
	DeletaUsuario($conexao , $id);
	header("Location:lista-login.php?removido=true");
	die();
	?>



</html>