<?php 


function ChecaUsuario($conexao, $email, $senha) {

	$senhamd5 = md5($senha);
	$query = "select * from usuario where email='{$email}' and senha='{$senhamd5}' ";  
	$resultado = mysqli_query ($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;

}