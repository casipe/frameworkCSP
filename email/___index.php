<?php
if(!isset($_POST['enviar_email']))
{
?>
	<title>Contato</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

	<form action="./" method="POST" name="frmFaleConosco" onsubmit="return submit_page(this);">
	<div align="center">
	<center>
	<table width="550" border="0" align="center">

	<tr>
	<td width="145">
	*Nome</td>
	<td width="395">
	<input type="text" size="50" maxlength="50" name="nome"></td>
	</tr>

	<tr>
	<td>
	*Email</td>
	<td><input type="text" size="50" maxlength="50" name="email"></td>
	</tr>

	<tr>
	  <td>*Endereço:</td>
	  <td><label>
		<input name="endereco" type="text" id="endereco" size="50" maxlength="50"/>
	  </label></td>
	</tr>
	<tr>
	<tr>
	  <td>*Cidade:</td>
	  <td><label>
		<input name="cidade" type="text" id="cidade" size="50" maxlength="50" />
	  </label></td>
	</tr>
	<tr>
	<tr>
	  <td>*Estado:</td>
	  <td><label>
		<input name="estado" type="text" id="estado" size="50" maxlength="50" />
	  </label></td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	</tr>
	<tr>
	<td>
	*Mensagem</td>
	<td>
	<textarea rows="5" name="msg" cols="50" maxlength="500"></textarea></td>
	</tr>
	</table>
	<label>
	<div align="center">
		<input type="hidden" name="enviar_email" value="1">
	  <input type="submit" value="Enviar">
	</div>
	</label>
<?php
}
else
{
	include_once 'enviar.php';
	
	$email = new Email();
	
	
	$email->emailRemetente = 'contato@portalpae.com.br';
	
	$email->servidorSmtp = 'mail.portalpae.com.br';
	$email->portaSmtp = '25';
	$email->userSmtp = 'portalpa';
	$email->passwdSmtp = 'qvm@825082';
		
	$email->emailNome = $_POST['nome'];
	$email->emailAssunto = $_POST['email'];		
	$email->emailTexto = 
					'Nome: '.$_POST['nome'].
					' | Email: '. $_POST['email'].
					' | Endereço: '.$_POST['endereco'].
					' | Cidade: '.$_POST['cidade'].
					' | Estado: '.$_POST['estado'].
					' | Texto: '.$_POST['texto'];
					
	
	$emailDestino = 'querovendermaisbr@gmail.com';
	if($email->enviarEmail($emailDestino))
		echo "Email enviado com sucesso.";
	else
		echo $email->ErrorInfo;	
	
}
?>
