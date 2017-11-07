<?php
include("conecta.php"); 
session_start();
if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {
	header('location:login.php');
	exit();	
}
else {
	echo "<center>Você esta logado!</center>";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Painel de controle ADM</title>
</head>
<body>
	
		<ul class="nav nav-tabs">
  
		  <li role="presentation" class="dropdown">
		    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
		      Dropdown <span class="caret"></span>
		    </a>
		    <ul class="dropdown-menu">
		     
		    </ul>
		  </li>
		  
		</ul>
		<button class="btn btn-primary">
		<a href="logout.php">Sair</a>
		</button>
</body>
</html>