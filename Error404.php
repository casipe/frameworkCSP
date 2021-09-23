<?php

/**
 * Class Login
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2019 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core;

use core\helper\HelperHtml;

Class Error404 extends AbstractController {

    private $tpl = 'error_404.tpl';
    protected $title = 'Página não encontrada';
    public $html = null;

    public function __construct() {
        $this->context = Context::getContext();
    }

    public function error_action() {
        $var_smarty = array(
            'metatags' => HelperHtml::metatags(array()),
            'tags_link_rel' => HelperHtml::tagsLinkRel(array()),
            'stylesheet' => HelperHtml::stylesheet(array()),
            'javascript' => HelperHtml::javascript(array()),
        );
        $this->viewRender($this->tpl, $var_smarty);
    }

}
