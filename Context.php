<?php

/**
 * Class Context
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core;

Class Context {

    /**
     * @var Context
     */
    protected static $instance;

    /**
     * @var Cookie
     */
    public $cookie;

    /**
     * @var Customer
     */
    public $customer;

    /**
     * @var Smarty
     */
    public $smarty;

    /**
     * Get a singleton context
     *
     * @return Context
     */
    public static function getContext() {
        if (!isset(self::$instance))
            self::$instance = new Context();
        return self::$instance;
    }

    /**
     * Clone current context
     * 
     * @return Context
     */
    public function cloneContext() {
        return clone($this);
    }

}
