<?php

/**
 * Class Cookie
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2019 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core;

@ob_start();

Class Cookie {

    public $contents;
    private $name = 'CSP_COKKIE';
    private $path;
    private $domain;
    private $expire;
    private $secure = false;
    private $http_only = false;

    public function __construct($name = '', $path = '/', $domain = null, $expire = null) {

        $this->name = ($name) ? $name : 'CSP_' . md5('CSP_COOKIE');
        $this->path = $path;
        $this->domain = $domain;

        if ($expire===null) {
            $min = 30;
            $expire = time() + (60 * $min);
        }
        
        $this->expire = $expire;
    }

    private function setCookie(Array $contents) {

        $contents['dateUpd'] = date('Y-m-d H:i:s');
        $content = Tools::jsonEncode($contents);
        $Encryption = new Encryption(_KEY_COOKIE_, _IV_RIJNDAEL_);
        $content = $Encryption->encrypt($content);

        if (PHP_VERSION_ID <= 50200) {
            setcookie($this->name, $content, $this->expire, $this->path, $this->domain, $this->secure);
        } else {
            setcookie($this->name, $content, $this->expire, $this->path, $this->domain, $this->secure, $this->http_only);
        }
    }

    public function save() {

        $contentsOld = $this->getContent();
        if (is_array($contentsOld)) {
            $this->contents = array_merge($contentsOld, $this->contents);
        }
        $this->setCookie($this->contents);
    }

    public function delete($key) {
        $contents = $this->getContent();
        if (isset($contents[$key])) {
            unset($contents[$key]);
        }
        $this->setCookie($contents);
    }

    public function deleteAll() {
        $contents = $this->getContent();
        $dateAdd = isset($contents['dateAdd']) ? $contents['dateAdd'] : '';
        $contents = $dateAdd ? array('dateAdd' => $dateAdd) : array();
        $this->setCookie($contents);
    }

    private function getContent() {
        if (isset($_COOKIE[$this->name])) {
            $content = $_COOKIE[$this->name];
            $Encryption = new Encryption(_KEY_COOKIE_, _IV_RIJNDAEL_);
            $content = $Encryption->decrypt($content);
            return Tools::jsonDecode($content);
        }
        return array('dateAdd' => date('Y-m-d H:i:s'));
    }

    public function get($name) {
        $contents = $this->getContent();
        return isset($contents[$name]) ? $contents[$name] : null;
    }

    public function __get($name) {
        return $this->get($name);
    }

    public function __isset($key) {
        $contents = $this->getContent();
        return isset($contents[$key]);
    }

    public function __set($key, $value) {
        $this->contents[$key] = $value;
    }

    public function __unset($key) {
        $this->delete($key);
    }

    public function __destruct() {
        
    }

}
