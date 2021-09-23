<?php

/**
 * Class Login
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core;

Class Module {

    private $command = null;
    private $context = null;

    public function __construct() {
        $this->context = Context::getContext();
        if (is_null($this->context))
            return;
        $this->command = new Model();
    }

    //instanceof
    public static function getInstanceByName($module_name) {
        include_once(_PATH_MODULE_ . '/' . $module_name . '/' . $module_name . '.php');
        if (class_exists($module_name, false))
            return new $module_name;
        return false;
    }

}
