<?php
header('Content-Type: text/html; charset=iso-8859-1'); 

//Inclusão da biblioteca com a classe PHPMailer//
include_once 'email_autenticar.lib.php'; 
//include_once 'phpmailer/class.phpmailer.php';    

//$mail = new PHPMailer();

Class Email extends PHPMailer
{ 

	var $emailRemetente;
	var $emailResponder;	
	var $emailNome;
	var $emailAssunto;		
	var $emailTexto;
	var $servidorSmtp;
	var $portaSmtp;
	var $userSmtp;
	var $passwdSmtp;

	public function enviarEmail($emailDestino)
	{
		
		if(!empty($emailDestino))
		{

			$this->SetLanguage("br", "email_idiomas/");
			
			$this->IsSMTP();
			
			$this->IsHTML(true);		

			//Nome do remetente.
			$this->FromName = $this->emailNome;

			//Email do remetente
			$this->From =  $this->emailRemetente;			
			
			//Email para resposta
			$this->AddReplyTo($this->emailResponder, $this->emailNome);			
			
			//$this->SetFrom($this->emailNome, $this->emailAssunto);

			//Pegar o servidor da conta de email.
			$this->Host = $this->servidorSmtp;

			//Usar protocolo SMTP.
			$this->Mailer = "smtp";

			//Email de destino.
			$this->AddAddress($emailDestino);

			//Assunto do email.
			$this->Subject = $this->emailAssunto;

			//Conteúdo do email.
			$this->Body = $this->emailTexto;

			//SMTP//
			$this->Port = $this->portaSmtp;
			// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
			$this->SMTPDebug = 1;
			$this->SMTPAuth = true;
			$this->SMTPSecure = 'ssl';
			$this->Username = $this->userSmtp; 
			$this->Password = $this->passwdSmtp; 
			
			if( !$this->Send() )
				return false;
			return true;
		}		
		return false;
	}
}