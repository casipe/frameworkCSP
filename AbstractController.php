<?php

/**
 * Class AbstractController
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core;

use core\helper\HelperHtml;
use core\View;

Class AbstractController extends System {

    protected $title = "Index";
    protected $controller_redirect = null;
    protected $controller_action = '';
    protected $errors = array();
    protected $post = array();
    protected $msg_errors = '';
    protected $msg_success = '';
    protected $not_found = 0;

    const ADD = 'add';
    const VIEW = 'view';
    const EDIT = 'edit';
    const DEL = 'del';

    public function __construct() {
        if ($this->controller_redirect){
           // Tools::redirect(Tools::url() . '/' . $this->controller_redirect);
        }
        parent::__construct();
        $this->title = Tools::strtoupper($this->controller);
        $this->id = (int) Tools::decryptID(Tools::getValue('id'), $this->controller);
    }

}