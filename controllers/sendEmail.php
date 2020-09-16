<?php 

require_once('../src/PHPMailer.php');
require_once('../src/SMTP.php');
require_once('../src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class sendEmail{
	
	public function enviaEmail($name, $phone, $date_bd, $email, $message){
		
		try {

			$mail = new PHPMailer(true);
			$mail->SMTPDebug = SMTP::DEBUG_SERVER;
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'gabrielteste@gmail.com';  //aqui vai o e-mail da conta que vai disparar o e-mail
			$mail->Password = '******';  //aqui vai a senha da conta que vai disparar o e-mail
			$mail->Port = 587;
			
			// Define o remetente
			$mail->setFrom('gabrielteste@gmail.com');

			 // Define o destinatário
			$mail->addAddress($email, 'gabrielteste@gmail.com');
		
			$mail->isHTML(true);
			$mail->Subject = 'Auto-vendas - Retorno do Contato';  //assunto
			$mail->Body = 'Olá, '.$name.'! Segue dados de sua solicitação <br> 
							Nome: '.$name.'<br>
							Nascimento: '.$date_bd.'<br>
							Telefone: '.$phone.'<br>
							Mensagem: '.$message;	//corpo do e-mail		
			$mail->AltBody = 'E-mail enviado';
		
			//validação para executar o envio e se ele retorna true
			if($mail->send()){
				return true;
			}else{
				echo 'Erro ao enviar e-mail';
			}
		
		} catch (Exception $e){
			echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
		}
	}

}



