<?php
session_start();
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $POST['mensagem'];

require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

$mail = new PHPMailer();
$mail -> isSMTP();
$mail->Host = 'oremanmotors@gmail.com';
$mail->Port = 587;
$mail->SMTPSecure='tls';
$mail->SMTPAuth = true;
$mail->Username = "oremanmotors@gmail.com";
$mail->Password ='codejrequipe4';

$mail->setFrom("oremanmotors@gmail.com","Admin code");
$mail->addAddress("oremanmotors@gmail.com");
$mail->Subject="Email de contato da loja";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem:{$mensagem}</html>");
$mail->AltBody ="de {$nome}\nemail:{$email}\nmensagem:{$mensagem}";

if($mail->send()){

	$_SESSION["success"]="Mensagem enviada com sucesso";
	header("Location:index.php");
}else{

	$_SESSION["danger"]="Erro ao enviar mensagem".$mail->ErrorInfo;
	header("Location:contato.php");

}


?>
