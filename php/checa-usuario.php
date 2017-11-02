<?php 

function ChecaUsuario($conexao, $email, $senha) {
	$senhahash = password_hash($senha, PASSWORD_DEFAULT);
	$query = "select * from usuario where email='{$email}' and senha='{$senhahash}' ";  
	$resultado = mysqli_query ($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}