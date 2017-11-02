<?php include("conecta.php"); 
include("checa-usuario.php"); 
  

$usuario =ChecaUsuario($conexao, $_POST["email"], $_POST["senha"]);

if ( $usuario == null) {

	header("Location:login.php");
} else{
	header("Location:produtos.php");

}
die();