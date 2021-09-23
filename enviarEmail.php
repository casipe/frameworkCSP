<?php 
header('Content-Type: text/html; charset=iso-8859-1'); 

$url_r = str_replace('http://','',$_SERVER['HTTP_REFERER']); 
$url_r = explode('/', $url_r);
$url_referer = $url_r[0];

if(($url_referer != $_SERVER['HTTP_HOST']) || !isset($_POST['enviar_contato']) || strlen($_POST['msg'])<5 ||
strlen($_POST['nome'])<2 || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
	Header("location:./contato.php?error=1");
	exit();	
}

include_once 'email/enviar.php';

$texto = 	'<br><b>Assunto:</b> ' . $_POST['assunto']. 
			'<br><b>Nome:</b> ' . $_POST['nome'].
			'<br><b>Email:</b> ' . $_POST['email'].
			'<br><br><b>Texto:</b> ' . $_POST['msg'];

$email = new Email();	

$email->emailRemetente = 'contato@domain.com.br';

$email->emailResponder = $_POST['email'];

$email->servidorSmtp = 'mail.domain.com.br';
$email->portaSmtp = '25';
$email->userSmtp = 'contato@domain.com.br';
$email->passwdSmtp = '';
	
$email->emailNome = $_POST['nome'];
$email->emailAssunto = 'CONTATO';		
$email->emailTexto = $texto;
				

$emailDestino = 'email@email.com';
if($email->enviarEmail($emailDestino))
	Header("location:./contato.php?success=1");
else
	Header("location:./contato.php?error=1");
	//echo $email->ErrorInfo;
?>
