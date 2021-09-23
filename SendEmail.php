<?php

/**
 * Class SendEmail
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2020 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core;

use core\helper\HelperValidate;
use core\helper\HelperEmail;

Class SendEmail {

    private $is_error_email = true;
    private $send_error = null;
    private $context;
    private $server_smtp;
    private $user_smtp;
    private $passwd_smtp;
    private $port_smtp;
    private $template;
    private $email_from;
    private $email_from_title;
    private $email_to;
    private $email_response;
    private $subject;
    private $add_attachment = array();
    private $list_email_to = array();
    private $list_email_cc = array();
    private $list_email_co = array();
    private $name;
    private $validate = null;
    public $emailText = '';
    public $secure = 'ssl';

    public function __construct($context = null) {
        $this->context = Context::getContext();
        if (!is_null($context))
            $this->context = $context;
        $this->validate = new HelperValidate();
    }

    public function header($server_smtp, $user_smtp, $passwd_smtp, $port_smtp, $email_from, $email_to, $email_response = null, $subject = null, $name = null) {
        $this->is_error_email = false;
        
        $email_from_title = '';
        if(is_array($email_from)){
            $email_from = $email_from[0];
            $this->email_from_title = $email_from[1];
        }
        
        
        if (!$server_smtp OR ! $user_smtp OR ! $passwd_smtp OR ! $port_smtp OR ! HelperValidate::isEmail($email_from)){
            $this->is_error_email = true;
        }
        else{
            
            if(Tools::count($this->list_email_to) || Tools::count($this->list_email_cc) || Tools::count($this->list_email_co)){
                
                $email_to = '';
                $is_error = false; 
                
                if(Tools::count($this->list_email_to)){
                    foreach($this->list_email_to as $email){
                        if(!HelperValidate::isEmail($email)){
                          $is_error = true;
                          break;
                        } 
                    }
                }
                
                if(!$is_error && Tools::count($this->list_email_to)){
                    foreach($this->list_email_cc as $email){
                        if(!HelperValidate::isEmail($email)){
                          $is_error = true;
                          break;
                        } 
                    }
                }
                
                if(!$is_error && Tools::count($this->list_email_co)){
                    foreach($this->list_email_co as $email){
                        if(!HelperValidate::isEmail($email)){
                          $is_error = true;
                          break;
                        } 
                    }
                }
                
                $this->is_error_email = $is_error;
                
            }elseif(!HelperValidate::isEmail($email_to)){
                $this->is_error_email = true;  
            } 
        }

        $this->server_smtp = trim($server_smtp);
        $this->user_smtp = $user_smtp;
        $this->passwd_smtp = $passwd_smtp;
        $this->port_smtp = (int) $port_smtp;

        $this->email_from = trim($email_from);
        $this->email_to = trim($email_to);
        $this->email_response = trim($email_response);
        $this->subject = $subject;
        $this->name = $name;
    }

    public function renderTemplate($template, Array $assign, $dir = null) {
        //$this->is_error_email = false;
        if (!$template OR ! is_array($assign))
            $this->is_error_email = true;
        $this->context->smarty->assign($assign);
        $this->template = $this->context->smarty->fetch(((!is_null($dir)) ? $dir : _PATH_TEMPLATE_ . 'email/') . $template);
    }
    
    
    public function addEmailTO($email) {
        $this->list_email_to[] = $email;
    }
    
    public function addEmailCC($email) {
        $this->list_email_cc[] = $email;
    }
    
    public function addEmailCO($email) {
        $this->list_email_co[] = $email;
    }

    public function addAttachment($path_file) { //Enviar anexo
        $this->add_attachment[] = $path_file;
    }

    public function send() {
        if ($this->is_error_email) {
            $this->send_error = 'Erro desconhecido.';
            return;
        }

        $mail = new HelperEmail();
        
        if($this->email_from_title){
            $mail->setFrom($this->email_from_title, $this->email_from);
        }
        else{
            $mail->emailFrom = $this->email_from; 
        }
        $mail->CharSet = 'UTF-8';

        if (!$this->name)
            $this->name = $this->subject; 

        $mail->emailName = $this->name;
        $mail->serverSmtp = $this->server_smtp; 
        $mail->portSmtp = $this->port_smtp;
        $mail->userSmtp = $this->user_smtp;
        $mail->passwdSmtp = $this->passwd_smtp;
        $mail->emailSubject = $this->subject;
        $mail->emailText = (!$this->emailText) ? $this->template : $this->emailText;
        $mail->emailResponse = $this->email_response;        
        $mail->SMTPSecure = $this->secure;

        if (count($this->add_attachment))
            $mail->listAttachment = $this->add_attachment;


        if($this->email_to){
             $mail->emailSend($this->email_to);
        }else{
            
            if(Tools::count($this->list_email_to)){
                $mail->listEmailTO = $this->list_email_to;
            }
            
            if(Tools::count($this->list_email_cc)){
                $mail->listEmailCC = $this->list_email_cc;
            }
            
            if(Tools::count($this->list_email_co)){
                $mail->listEmailBCC = $this->list_email_co;
            }
            $mail->emailSend();
        }
        $this->send_error = (!empty($mail->error['error']));
    }

    public function isError() {
        return $this->send_error;
    }

}
