<?php

/**
 *
 * File defines.inc.php
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

$phpRequired = '7.0.0';
$fremeworkVersion = '5.0';

/**
  #############################################
 *
 * Definindo as constantes gerais do sistema
 *
  #############################################
 */
// Versão do Framework.
defined('_FW_VERSION_') or define('_FW_VERSION_', $fremeworkVersion);

// Configurar o sistema para o modo 'depurar'.
$debug = true;
defined('_DEBUG_DEV_') or define('_DEBUG_DEV_', $debug);

if (_DEBUG_DEV_) {
    @ini_set('display_errors', 1);
    @error_reporting(E_ALL | E_STRICT);
} else {
    @ini_set('error_log', 'php_error.log');
    @ini_set('display_errors', 'off');
}

/* correct Apache charset (except if it's too late */
if (!headers_sent()) {
    header('Content-Type: text/html; charset=utf-8');
}

@ini_set('upload_max_filesize', '100M');
@ini_set('default_charset', 'utf-8');
@ini_set('magic_quotes_runtime', 0);

/* Redefine REQUEST_URI if empty (on some webservers...) */
if (!isset($_SERVER['REQUEST_URI']) || empty($_SERVER['REQUEST_URI'])) {
    if (!isset($_SERVER['SCRIPT_NAME']) && isset($_SERVER['SCRIPT_FILENAME']))
        $_SERVER['SCRIPT_NAME'] = $_SERVER['SCRIPT_FILENAME'];
    if (isset($_SERVER['SCRIPT_NAME'])) {
        if (basename($_SERVER['SCRIPT_NAME']) == 'index.php' && empty($_SERVER['QUERY_STRING']))
            $_SERVER['REQUEST_URI'] = dirname($_SERVER['SCRIPT_NAME']) . '/';
        else {
            $_SERVER['REQUEST_URI'] = $_SERVER['SCRIPT_NAME'];
            if (isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING']))
                $_SERVER['REQUEST_URI'] .= '?' . $_SERVER['QUERY_STRING'];
        }
    }
}

/* Trying to redefine HTTP_HOST if empty (on some webservers...) */
if (!isset($_SERVER['HTTP_HOST']) || empty($_SERVER['HTTP_HOST'])){
    $_SERVER['HTTP_HOST'] = @getenv('HTTP_HOST');
}

// Versão mínima requerida do php
defined('_PHP_REQUIRED_') or define('_PHP_REQUIRED_', $phpRequired);

// Verificar a versão atual do php.
if (!version_compare(PHP_VERSION, _PHP_REQUIRED_, ">=")){
    die("<title>System error!</title><h4 style=\"text-align:center;\">Sua versão(" . PHP_VERSION . ") do php é incompatível para usar o Framework CASIPE. <br> É necessário a versão " . _PHP_REQUIRED_ . " ou superior.</h4>");
}
// Verificar se a extensão PDO foi habilitada.
if (!extension_loaded('PDO'))
    die("<title>System error!</title><h4 style=\"text-align:center;\">Por favor, verifique as configurações do seu \"php.ini\". <br> A extensão PDO não foi carregada ou está desabilitada. O sistema necessita desta extensão para o seu perfeito funcionamento.</h4>");

defined('_MAGIC_QUOTES_GPC_') or define('_MAGIC_QUOTES_GPC_', true);
defined('_MYSQL_REAL_ESCAPE_STRING_') or define('_MYSQL_REAL_ESCAPE_STRING_', true);

defined('_MODELS_') or define('_MODELS_', 'models/');

defined('_VIEWS_') or define('_VIEWS_', 'templates/');

defined('_CONTROLLERS_') or define('_CONTROLLERS_', 'classes/controllers/');

defined('_HELPERS_') or define('_HELPERS_', 'helpers/');

defined('_AUTHENTICATION_') or define('_AUTHENTICATION_', true);

/**
 * Dir Root
 */
defined('_ROOT_DIR_') or define('_ROOT_DIR_', realpath(dirname(__FILE__) . '/..'));

/**
 * Dir Cache
 */
defined('_CACHE_DIR_') or define('_CACHE_DIR_', _ROOT_DIR_ . '/cache');

/**
 * Dir Libraries
 */
defined('_LIBRARIES_DIR_') or define('_LIBRARIES_DIR_', _ROOT_DIR_ . '/libraries');

/**
 * Dir Smarty
 */
defined('_SMARTY_DIR_') or define('_SMARTY_DIR_', _LIBRARIES_DIR_ . '/smarty');
defined('_SMARTY_FORCE_COMPILE_') or define('_SMARTY_FORCE_COMPILE_', true);
defined('_SMARTY_CHECK_COMPILE_') or define('_SMARTY_CHECK_COMPILE_', true);


/**
 * Dir Libraries PDF
 */
defined('_PDF_DIR_') or define('_PDF_DIR_', _LIBRARIES_DIR_ . '/pdf');


/**
 * Dir Email
 */
defined('_EMAIL_DIR_') or define('_EMAIL_DIR_', _LIBRARIES_DIR_ . '/email');


/**
 * Dir fPDF
 */
defined('_FPDF_DIR_') or define('_FPDF_DIR_', _PDF_DIR_ . '/fpdf');

/**
 * Dir DOMPDF
 */
defined('_DOMPDF_DIR_') or define('_DOMPDF_DIR_', _PDF_DIR_ . '/dompdf');


/**
 * Dir TCPDF
 */
defined('_TCPDF_DIR_') or define('_TCPDF_DIR', _PDF_DIR_ . '/tcpdf');


/**
 * Dir PHPMailer
 */
defined('_PHPMAILER_DIR_') or define('_PHPMAILER_DIR_', _EMAIL_DIR_ . '/phpmailer');


include_once(dirname(__FILE__) . '/smarty.config.inc.php');

