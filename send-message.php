<?php

include_once 'config-mail.php';

if(isset($_POST['submit'])):
	$msg = $_POST['message'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	email($email, $msg ,$assunto);
endif;

