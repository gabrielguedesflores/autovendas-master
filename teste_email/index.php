<?php 

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {

	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'gabrielteste@gmail.com'; //aqui vai o e-mail da conta que vai disparar o e-mail
	$mail->Password = '********'; //aqui vai a senha da conta que vai disparar o e-mail
	$mail->Port = 587;

	$mail->setFrom('gabrielteste@gmail.com');
	$mail->addAddress($email, 'gabrielteste@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = 'Assunto do e-mail';
	$mail->Body = 'Corpo do e-mail';
	$mail->AltBody = 'Chegou';

	if($mail->send()){
		echo 'E-mail enviado com sucesso';
	}else{
		echo 'Erro ao enviar e-mail';
	}


} catch (Exception $e){
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}

