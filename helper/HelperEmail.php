<?php

/**
 *
 * Class HelperEmail
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2020 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core\helper;

use core\libraries\email\phpmailer\PHPMailer;

//Email é uma classe que realiza o envio de email em geral
Class HelperEmail extends PHPMailer {

    var $emailFrom;
    var $emailResponse;
    var $emailName;
    var $emailSubject;
    var $emailText;
    var $serverSmtp;
    var $portSmtp;
    var $userSmtp;
    var $passwdSmtp;
    var $emailLaguange;
    var $emailLaguangeDir;
    var $listAttachment = array();
    var $listEmailTO = array();
    var $listEmailCC = array();
    var $listEmailBCC = array();    
    
    const SSL = 'ssl';
    const TSL = 'tsl';

    public function __construct($exceptions = false) {
        parent::__construct($exceptions);
    }

    public function emailSend($email = '', $nameTo = '') {

        $this->SetLanguage("br", "email_idiomas/");

        $this->IsSMTP();

        $this->IsHTML(true);

        //Nome do remetente.
        $this->FromName = $this->emailName;

        //Email do remetente
        $this->From = $this->emailFrom;

        //Email para resposta
        $this->AddReplyTo($this->emailResponse, $this->emailName);

        //$this->SetFrom($this->emailName, $this->emailSubject);
        //Pegar o servidor da conta de email.
        $this->Host = $this->serverSmtp;

        //Usar protocolo SMTP.
        //$this->Mailer = "smtp";


        if (!empty($email)) {
            //Email de destino.
            $this->AddAddress($email, $nameTo);
        } else {
            if (count($this->listEmailTO)) {
                foreach ($this->listEmailTO as $email) {
                    if (!is_array($email)) {
                        $this->addAddress($email);
                    } else {
                        foreach ($email as $item) {
                            if (!empty($item['email'])) {
                                $_email = $item['email'];
                                $_name = '';
                                if (!empty($item['name'])) {
                                    $_name = $item['name'];
                                }
                                $this->addAddress($_email, $_name);
                            }
                        }
                    }
                }
            }

            if (count($this->listEmailCC)) {
                foreach ($this->listEmailCC as $email) {
                    if (!is_array($email)) {
                        $this->addCC($email);
                    } else {
                        foreach ($email as $item) {
                            if (!empty($item['email'])) {
                                $_email = $item['email'];
                                $_name = '';
                                if (!empty($item['name'])) {
                                    $_name = $item['name'];
                                }
                                $this->addCC($_email, $_name);
                            }
                        }
                    }
                }
            }

            if (count($this->listEmailBCC)) {
                foreach ($this->listEmailBCC as $email) {
                    if (!is_array($email)) {
                        $this->addBCC($email);
                    } else {
                        foreach ($email as $item) {
                            if (!empty($item['email'])) {
                                $_email = $item['email'];
                                $_name = '';
                                if (!empty($item['name'])) {
                                    $_name = $item['name'];
                                }
                                $this->addBCC($_email, $_name);
                            }
                        }
                    }
                }
            }
        }


        $this->CharSet = 'UTF-8';
        $this->Encoding = 'base64';

        //Assunto do email.
        $this->Subject = $this->emailSubject;



        //Conteúdo do email.
        $this->Body = $this->emailText;

        //SMTP//
        $this->Port = $this->portSmtp;
        
        // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
        //$this->SMTPDebug = 2;
        
        $this->SMTPAuth = true;
        
        $this->Username = $this->userSmtp;
        $this->Password = $this->passwdSmtp;



        if (count($this->listAttachment)) {
            foreach ($this->listAttachment AS $attachment)
                $this->AddAttachment($attachment);
        }

        if (!$this->Send())
            return false;
        return true;
    }

}
