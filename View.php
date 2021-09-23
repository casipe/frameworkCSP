<?php

/**
 * Class View
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2019 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core;

ob_start();

use core\helper\HelperHtml;

Class View {

    protected $context = null;
    private $pathTemplate = null;
    private $template = null;
    private $onlyContent = null;
    private $onlyContentBegin = true;
    private $onlyContentEnd = true;
    private $assignVar = array();
    private $script = array();
    private $stylesheet = array();

    public function __construct($template) {
        $this->template = $template;
        $this->context = Context::getContext();
        $template = System::getTemplate();

        if ($template) {
            $this->pathTemplate = _ROOT_ . '/templates/' . $template . '/';
            if (!is_dir($this->pathTemplate))
                header('Location: http://' . Tools::getBaseDomain());
        } else
            $this->pathTemplate = _PATH_TEMPLATE_;
    }

    public function render() {
        $this->context->smarty->assign($this->getAssignVar());

        if ($this->getStylesheet()) {
            $this->context->smarty->assign('STYLE_SHEET', $this->getStylesheet());
        }

        if ($this->getScript()) {
            $this->context->smarty->assign('SCRIPT', $this->getScript());
        }

        if ($this->getOnlyContentBegin()) {
            $this->context->smarty->display($this->pathTemplate . 'mainBegin.phtml');
        }

        //$this->context->smarty->debugging = false;
        //$this->context->smarty->caching = true;
        if ($this->getOnlyContent() !== false) {
            $this->context->smarty->display($this->pathTemplate . $this->template);
        }


        if ($this->getOnlyContentEnd()) {
            $this->context->smarty->display($this->pathTemplate . 'mainEnd.phtml');
        }
    }

    public function fetch() {

        $this->context->smarty->assign($this->getAssignVar());

        //$this->context->smarty->debugging = false;
        //$this->context->smarty->caching = true;

        if ($this->getStylesheet()) {
            $this->context->smarty->assign('STYLE_SHEET', $this->getStylesheet());
        }

        if ($this->getScript()) {
            $this->context->smarty->assign('SCRIPT', $this->getScript());
        }

        return $this->context->smarty->fetch($this->pathTemplate . $this->template);
    }

    private function getOnlyContent() {
        return $this->onlyContent;
    }

    private function getOnlyContentBegin() {
        return $this->onlyContentBegin;
    }

    private function getOnlyContentEnd() {
        return $this->onlyContentEnd;
    }

    public function setOnlyContent($onlyContent) {
        if ($onlyContent) {
            $this->onlyContentBegin = false;
            $this->onlyContentEnd = false;
        }
        $this->onlyContent = $onlyContent;
    }

    public function setOnlyContentBegin($onlyContentBegin) {
        $this->onlyContentBegin = $onlyContentBegin;
    }

    public function setOnlyContentEnd($onlyContentEnd) {
        $this->onlyContentEnd = $onlyContentEnd;
    }

    private function getAssignVar() {
        return $this->assignVar;
    }

    public function setAssignVar(Array $assignVar) {
        $this->assignVar = $assignVar;
    }

    private function getScript() {
        if (!Tools::count($this->script)) {
            return false;
        }
        return HelperHtml::javascript($this->script);
    }

    private function getStylesheet() {
        if (!Tools::count($this->stylesheet)) {
            return false;
        }
        return HelperHtml::stylesheet($this->stylesheet);
    }

    public function setScript(Array $script) {
        $this->script = $script;
    }

    public function setStylesheet(Array $stylesheet) {
        $this->stylesheet = $stylesheet;
    }

}

ob_clean();
