<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once("vendor/autoload.php");;

function email($emailDes, $msg, $assunto) {
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	// no host se estiver usando o gmail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = 'seu e-mail';
	$mail->Password = 'sua senha';
	// quem está enviando
	$mail->setFrom('seu e-mail', 'seu e-mail');
	// para quem estamos enviando
	$mail->addAddress($emailDes, $emailDes);
	$mail->Subject = $assunto;
	$mail->Body = $msg;

	if (!$mail->send()) {
		echo "Erro";
		//return false;
	} else {
		echo "Sucesso";
		//return true;
	}
}
