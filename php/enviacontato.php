<?php
session_start();

$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

use PHPMailer\PHPMailer\PHPMailer;
require '../PHPMailer-master/src/SMTP.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();
$mail->SMTPDebug = 2;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "oremanmotors@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "codejrequipe4";

//Set who the message is to be sent from
$mail->setFrom($email);
$mail->addAddress('oremanmotors@gmail.com', 'EQUIPE OREMAN');

//Set the subject line
$mail->Subject = "Mensagem do cliente";

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("<html>de: {$nome} <br/>email: {$email} <br/>mensagem: {$mensagem}</html>");
$mail->AltBody = " de: {$nome} \n email: {$email} \n mensagem: {$mensagem}";

//Send email and verify success/error
if ($mail->send()) {
   $_SESSION["success"] = "Sua mensagem foi enviada!";
   header("Location: ../html/home.html");
} else {
   $_SESSION["danger"] = "ERRO: Sua mensagem não foi enviada!" . $mail->ErrorInfo;
    header("Location:contato.php");
}

die();