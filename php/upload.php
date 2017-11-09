<?php
include("conecta.php");

$msg= false;
$imagem = $_FILES['imagem'];

if(isset($imagem)) { 
	$extensao = strtolower(substr($_FILES['imagem'], -4));
	$novo_nome = md5(time()).$extensao;
	$diretorio = "upload/";

	move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio.$novo_nome);

	$sql_code = "INSERT INTO produtos (capa) VALUES ('$novo_nome')";
	if (mysqli_query($sql_code))
		$msg = "Arquivo enviado com sucesso."
	else 
		$msg = "Falha ao enviar arquivo."
}

?>



