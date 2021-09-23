<?php

/**
 *
 * Class System
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core;

Class System {

    static $charset = 'UTF-8';
    public $language = 'pt_br';
    public $html = null;
    private $_url = null;
    private $_explode = null;
    protected $controller = null;
    public $_action = null;
    public static $_params = null;
    public $_params_explode = 2;
    protected $context;
    protected $id;
    private $path_base;
    private $url_base;
    static private $template;

    public function __construct() {


        $defined_consts = array(
            '_ROOT_',
            '_PATH_',
            '_DOMAIN_',
            '_URL_BASE_',
            '_URL_APP_',
            '_BASE_PATH_',
            '_BASE_TEMPLATE_',
            '_PATH_IMG_',
            '_PATH_MODULE_',
            '_BASE_TEMPLATE_EMAIL_',
            '_PATH_TEMPLATE_EMAIL_',
            '_THEME_',
            '_NAME_SITE_',
            '_TOKEN_LOGIN_',
            '_KEY_COOKIE_',
            '_KEY_TOKEN_',
            '_IV_RIJNDAEL_',
        );

        foreach ($defined_consts as $const) {
            if (!defined($const)) {
                die('System Error. Constant is not defined: ' . $const);
            }
        }

        $this->context = Context::getContext();
        $this->setURL();
        $this->setExplode();
        $this->setController();
        $this->setAction();
        $this->setParams();
    }

    public static function exception($msg = null, $code = null) {
        if ($msg != null) {
            $exception = new Exceptions();
            $exception->exception($msg, $code);
        }
    }

    /**
     * Seta a URL completa do aplicativo(site)
     *
     * @return Void
     */
    private function setURL() {
        $uri = System::escape((isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : ''));

        if (_PATH_ != '') {
            $array_root = explode('/', $_SERVER['PHP_SELF']);
            $array_url_base = explode('/', $this->getUrlBase());

            $directory_root = (isset($array_root[1])) ? trim($array_root[1]) : '';
            $directory_base = trim(array_pop($array_url_base));

            if ($directory_root == $directory_base) {
                $uri = '/' . str_replace(array(str_replace('/', '', $directory_base), '//'), '', $uri);
            }

            $uri = str_replace(_PATH_ . '/', '', $uri);
        }
        $uri = str_replace(array("\\", "//"), '/', $uri);
        $uri = @explode('?', $uri);

        $url = isset($uri[0]) ? $uri[0] : $uri;

        if ($url AND $url <> '/') {
            $this->_url = $url;
        } else {
            $this->_url = 'index/init';
        }
    }

    /**
     * Atribui um array a variável $this->_explode
     *
     * @return Void
     */
    private function setExplode() {
        $explode = explode('/', $this->_url);
        foreach ($explode as $k => $v) {
            if ($v == '') {
                unset($explode[$k]);
            }
        }
        $this->_explode = array_values($explode);
    }

    /**
     * Atribui um controle a variável $this->controller
     * Ex.: url: "/cadastro" = classe "Cadastro" 
     * no diret�rio "/controllers/cadastro_controller" do aplicativo(site)
     *
     * @return Void
     */
    private function setController() {
        $controller = Tools::strtolower($this->_explode[0]);
        $_GET['controller'] = $controller;
        $this->controller = $controller;
    }

    /**
     * Atribui uma ação a variável $this->_action
     * Ex.: url: "cadastro/inserir" =  seta o método "inserir" na classe "Cadastro"
     * no diret�rio "/controllers/cadastro_controller" do aplicativo(site)
     *
     * @return String
     */
    private function setAction() {
        $action = ( (!isset($this->_explode[1]) || $this->_explode[1] == null || $this->_explode[1] == 'index' ) ?
                'init' : $this->_explode[1]);
        $this->_action = $action;
    }

    /**
     * Atribui uma parametro a variável $this->_params
     * Ex.: url: "cadastro/alterar/usuario/fulano" =  seta o método "alterar" na classe "Cadastro"
     * no diretório "/controllers/cadastro_controller" do aplicativo(site) e altera o usuário "fulano"
     *
     * @return Array
     */
    private function setParams() {
        unset($this->_explode[0]);
        $this->_explode = array_values($this->_explode);
        //array_pop( $this->_explode );	

        if (end($this->_explode) == null)
            array_pop($this->_explode);


        $ind = array();
        $value = array();
        $i = 0;
        if (!empty($this->_explode)) {
            foreach ($this->_explode as $val) {
                if ($i % 2 == 0) {
                    $ind[] = $val;
                } else {
                    $value[] = $val;
                }
                $i++;
            }
        }

        if (count($ind) == count($value) && !empty($ind) && !empty($value)) {
            self::$_params = array_combine($ind, $value);
        } else {
            self::$_params = $this->_explode;
        }
    }

    public function getPathBase() {
        return $this->path_base;
    }

    public function setPathBase($path_base) {
        $this->path_base = $path_base;
    }

    public function getUrlBase() {
        return $this->url_base;
    }

    public function setUrlBase($url_base) {
        $this->url_base = $url_base;
    }

    /**
     * Recupera o valor da variável $this->_params
     * @return Array
     */
    public static function getUriParam($param = '') {
        if ($param != '') {
            if (isset(self::$_params[$param])) {
                return self::$_params;
            }
        }
        return self::$_params;
    }

    /**
     * Verificar parametro
     * @return boolean
     */
    public static function checkParam($index, $param) {
        if ($param == '') {
            return false;
        }
        if (isset(self::$_params[$index]) AND self::$_params[$index] == $param) {
            return true;
        }
        return false;
    }

    /**
     * Recupera e retorna o codificacao de caracteres pre ou configurada
     *
     * @return String
     */
    public static function charset() {
        $cfg = new Config;
        $params = $cfg->paramsApp();
        if (array_key_exists('charset', $config) && $params['charset'] != '')
            self::$charset = $params['charset'];
        return self::$charset;
    }

    /**
     * Adiciona e retorna barras invertidas a uma string 
     * Ex.: Evitar "SQL Injection"
     *
     * @param String $str
     * @return String
     */
    public static function escape($str) {
        return Tools::addslashes($str);
    }

    /**
     * Inicia o aplicativo(site)
     *
     * @return Void
     */
    public function run($path = '') {

        $path = ($path != '') ? $path . '/' : _ROOT_ . '/';
        $controller_path = $path . _CONTROLLERS_ . $this->controller . 'Controller.php';

        $fileExists = false;
        if (file_exists($controller_path)) {
            $fileExists = true;
        } else {
            $controller_path = $path . _CONTROLLERS_ . 'reports/' . $this->controller . 'Controller.php';
            if (file_exists($controller_path)) {
                $fileExists = true;
            }
        }
        $get_model = true;
        if (!$fileExists) {
            $controller_path = $path . _CONTROLLERS_ . 'error404Controller.php';
            if (!file_exists($controller_path)) {
                $controller_path = dirname(__FILE__) . '/Error404.php';
                $get_model = false;
            } else
                $this->controller = 'error404Controller';

            $this->_action = 'error_action';
        } else {
            if ((_AUTHENTICATION_ AND ! @$this->context->cookie->is_logged) AND ( @$this->context->cookie->session_admin))
                $this->controller = "login";
            $this->_action = 'init';
            $this->controller = $this->controller . 'Controller';
        }

        if (!file_exists($controller_path)) {
            System::exception("Houve um erro. O controller {$controller_path} não existe.");
        }

        require_once($controller_path);

        if ($get_model)
            $instancy = new $this->controller($config = null);
        else
            $instancy = new Error404();
        if (method_exists($instancy, $this->_action)) {
            $action = $this->_action;
            $instancy->$action();
        }
    }

    public function linkPage($path = true) {
        $link = '';
        $this->setURL();
        $this->setExplode();
        if (count($this->_explode)) {
            foreach ($this->_explode as $uri) {
                if (!empty($uri))
                    $link .= $uri . '/';
            }
        }
        return Tools::url($path) . '/' . System::escape($link);
    }

    public function setPageRedirect($link = '') {
        if (!$link) {
            $link = $this->linkPage();
        }
        $this->context->cookie->page_redirect = $link;
    }

    public function setTemplate($template) {
        self::$template = $template;
    }

    static public function getTemplate() {
        return self::$template;
    }

    public function isPost() {
        return !empty($_POST);
    }

}
