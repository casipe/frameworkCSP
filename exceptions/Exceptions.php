<?php

/**
 *
 * Class Exceptions
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core\exceptions;

class Exceptions extends Exception {

    private $exceptions = null;

    /**
     * Constructor.
     * @param string $message error message
     * @param integer $code error code
     */
    public function exception($message = null, $code = 0, $file = null) {
        parent::__construct($message, $code, $file);
        $this->exceptions = $this->exception_log($file);

        $this->view_exceptions();
    }

    private function exception_log($file = null) {
        //addLineLog($file=null, __LINE__, $txt_log=null);
        if (is_null($file)) {
            $f = explode('/', str_replace('\\', '/', str_replace('\\', '/', $this->getFile())));
            $file = end($f);
        }
        $msg = "<span style>Error</span>: {$this->getMessage()} <br> 
				File: {$file} <br>
				Path file: {$this->getFile()} <br>
				Line: {$this->getLine()}";

        return utf8_encode($msg);
    }

    private function view_exceptions($file = null) {
        if (_DEBUG_DEV_) {

            if (is_null($file)) {
                $f = explode('/', str_replace('\\', '/', str_replace('\\', '/', $this->getFile())));
                $file = end($f);
            }

            $log = "<strong style=\"color:#555;\">Error:</strong> {$this->getMessage()} <br> 
					<strong style=\"color:#555;\">File:</strong> {$file} <br>
					<strong style=\"color:#555;\">Path file:</strong> {$this->getFile()} <br>
					<strong style=\"color:#555;\">Line:</strong> {$this->getLine()}";

            $msg = "<div style=\"clear:both;text-align:left; padding:5px; margin:15px;border:2px solid red;background:#FAE9E9; color:blue\">";
            $msg .= utf8_encode($log);
            $msg .= "</div>";
            print($msg);
        }
    }

    /**
     *  Arquivo para manipulação de erros de forma segura:
     *   envia um e-mail para o administrador com as informações sobre o erro
     */
    function manipuladorErros($errno, $errstr = '', $errfile = '', $errline = '') {
        if (error_reporting() == 0)
            return;

        global $_CONFIG;

        // Verifica se não foi chamada por uma 'exception'
        if (func_num_args() == 5) {
            $exception = null;
            list($errno, $errstr, $errfile, $errline) = func_get_args();
            //$backtrace = array_reverse(debug_backtrace());
        } else {
            $exc = func_get_arg(0);
            $errno = $exc->getCode(); // Nome do erro
            $errstr = $exc->getMessage(); // Descrição do erro
            $errfile = $exc->getFile(); // Arquivo
            $errline = $exc->getLine(); // Linha
            //$backtrace = $exc->getTrace();
        }
        // A variável $backtrace pode ser usada para fazer um Back Trace do erro
        // "Nome" de cada tipo de erro
        $errorType = array(
            E_ERROR => 'ERROR',
            E_WARNING => 'WARNING',
            E_PARSE => 'PARSING ERROR',
            E_NOTICE => 'NOTICE',
            E_CORE_ERROR => 'CORE ERROR',
            E_CORE_WARNING => 'CORE WARNING',
            E_COMPILE_ERROR => 'COMPILE ERROR',
            E_COMPILE_WARNING => 'COMPILE WARNING',
            E_USER_ERROR => 'USER ERROR',
            E_USER_WARNING => 'USER WARNING',
            E_USER_NOTICE => 'USER NOTICE',
            E_STRICT => 'STRICT NOTICE',
            E_RECOVERABLE_ERROR => 'RECOVERABLE ERROR'
        );

        // Define o "nome" do erro atual
        if (array_key_exists($errno, $errorType)) {
            $err = $errorType[$errno];
        } else {
            $err = 'CAUGHT EXCEPTION';
        }

        // Se está ativo o LOG de erros, salva uma mensagem no log, usando o formato padrão
        if (ini_get('log_errors'))
            error_log(sprintf("PHP %s:  %s in %s on line %d", $err, $errstr, $errfile, $errline));

        // Mensagem para o email
        $mensagem = '';
        $mensagem .= '[ ERRO NO PHP ]' . "\r\n";
        $mensagem .= 'Site: ' . $_CONFIG['errorHandler']['siteName'] . "\r\n";
        $mensagem .= 'Tipo de erro: ' . $err . "\r\n";
        $mensagem .= 'Arquivo: ' . $errfile . "\r\n";
        $mensagem .= 'Linha: ' . $errline . "\r\n";
        $mensagem .= 'Descrição: ' . $errstr . "\r\n";
        if (isset($_SERVER['REMOTE_ADDR'])) {
            $mensagem .= "\r\n";
            $mensagem .= '[ DADOS DO VISITANTE ]' . "\r\n";
            $mensagem .= 'IP: ' . $_SERVER['REMOTE_ADDR'] . "\r\n";
            $mensagem .= 'User Agent: ' . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
        }
        if (isset($_SERVER['REQUEST_URI'])) {
            $url = (preg_match('/HTTPS/i', $_SERVER["SERVER_PROTOCOL"])) ? 'https' : 'http';
            $url .= '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            $mensagem .= "\r\n";
            $mensagem .= 'URL: ' . $url . "\r\n";
        }
        if (isset($_SERVER['HTTP_REFERER'])) {
            $mensagem .= 'Referer: ' . $_SERVER['HTTP_REFERER'] . "\r\n";
        }
        $mensagem .= "\r\n";
        $mensagem .= 'Data: ' . date('d/m/Y H:i:s') . "\r\n";

        // Mensagem simples
        $mensagemSimples .= $err . ': ' . $errstr . ' no arquivo ' . $errfile . ' (Linha ' . $errline . ')';


        // Começa a definição do e-mail
        $assunto = '[' . $err . '] ' . $_CONFIG['errorHandler']['siteName'] . ' - ' . date('d/m/y H:i:s');

        $headers = '';
        $headers .= 'From: ' . $_CONFIG['errorHandler']['fromName'] . ' <' . $_CONFIG['errorHandler']['from'] . '>' . "\r\n";
        $headers .= 'To: ' . $_CONFIG['errorHandler']['toName'] . ' <' . $_CONFIG['errorHandler']['to'] . '>' . "\r\n";
        $headers .= 'Reply-To: ' . $_CONFIG['errorHandler']['fromName'] . ' <' . $_CONFIG['errorHandler']['from'] . '>' . "\r\n";
        $headers .= 'Return-Path: ' . $_CONFIG['errorHandler']['fromName'] . ' <' . $_CONFIG['errorHandler']['from'] . '>' . "\r\n";
        $headers .= 'X-Mailer: PHP/' . phpversion();

        // Faz um envio simples
        $enviado = @mail($_CONFIG['errorHandler']['to'], $assunto, $mensagem, $headers);

        // Verifica se foi possível enviar o email, caso contrário exibe-o na tela
        if ($enviado)
            return true;
        else
            echo $mensagemSimples;


        // Define o seu novo manipulador de erros
        set_error_handler('manipuladorErros');
        #echo $n;
    }

}

//End Class
