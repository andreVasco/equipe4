<?php include("conecta.php"); 
include("checa-usuario.php"); 



$email =  $_POST['email'];
$senha = $_POST['senha'];


$usuario = ChecaUsuario($conexao, $email, $senha);

?>
<html>
<head>
<title>Autenticando usuário</title>
<script type="text/javascript">
	function loginsuccessfully() {
	<?php	if ($usuario['id'] == 1) { ?>
			setTimeout ("window.location='painel.php'", 5000 );
	<?php	}
	  else { ?>
	  	setTimeout ("window.location='painel-funcionarios.php'", 5000 );
	 <?php } ?>
	}

	function loginfailed() {
		setTimeout ("window.location='login.php'", 5000 );
	}


</script>

</head>
<body>
	
<?php
if ( $usuario == null) {

	echo "<center> Login Inválido! </center>";
	echo "<script>loginfailed()</script>";
} 
else{
	session_start();
	$_SESSION['email'] =  $_POST['email'];
	$_SESSION['senha'] =  $_POST['senha'];
	echo "<center> Logado com sucesso! </center>";
	echo "<script>loginsuccessfully()</script>";

}
?>

</body>
</html>