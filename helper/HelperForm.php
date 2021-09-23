<?php

/**
 * Class HelperForm
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core\helper;

Class HelperForm {

    private $model = null;

    /**
     * M�todo que abre a tag form
     * @param String $controller A��o(action) do formulario
     * @param Array $html_options Op��es da tag form Ex.: array('id'=>'form_contato', 'class'=>'forms');
     * @return String
     */
    public static function formBegin($controller, Array $html_options = null) {
        $form = "\n\t\t";
        $this->model = $controller;

        if (!isset($html_options['method']))
            $html_options['method'] = "post";

        $options = array('action' => Tools::absoluteURL() . $this->model);

        if ($html_options !== null)
            $options = array_merge($options, $html_options);
        $form .= Html::tag($tag = "form", $options, $content = true, $open_tag = true, $close_tag = false);
        $form .= "\n\t\t";

        return $form;
    }

    /**
     * M�todo que fecha a tag form
     * @return String
     */
    public static function formEnd() {
        $form = "\n\t\t";
        $form .= Html::tag($tag = "form", $options = array(), $content = false, $open_tag = false, $close_tag = true);
        $form .= "\n";
        return $form;
    }

    /**
     * M�todo gerador dos inputs do tipo "text"
     * @param String $name Nome do input
     * @param Array $html_options Op��es da tag input Ex.: array( 'class'=>'left clear', );
     * @return String
     */
    public static function textField($name, Array $html_options = null) {
        $value = null;

        if ($value == null)
            $value = "";

        if (isset($html_options['value']))
            $value = $html_options['value'];

        $options = array(
            'type' => 'text',
            'name' => $this->model . '[' . strtolower($name) . ']',
            'value' => $value,
            'id' => $this->model . '_' . strtolower($name)
        );

        if ($html_options !== null)
            $options = array_merge($options, $html_options);
        $input = Html::tag($tag = "input", $options, $content = true, $open_tag = true, $close_tag = true);
        $input .= "\n\t\t";

        return $input;
    }

    /**
     * M�todo gerador dos inputs do tipo "hidden"
     * @param String $name Nome do input
     * @param String $value
     * @return String
     */
    public static function hiddenField($name, $value = null) {

        if ($value == null)
            $value = "1";

        $options = array(
            'type' => 'hidden',
            'name' => $this->model . '[' . strtolower($name) . ']',
            'value' => $value,
            'id' => $this->model . '_' . strtolower($name)
        );
        $input = Html::tag($tag = "input", $options, $content = true, $open_tag = true, $close_tag = true);
        $input .= "\n\t\t";

        return $input;
    }

    /**
     * M�todo gerador dos inputs do tipo "submit"
     * @param String $name Nome do input
     * @param Array $html_options Op��es da tag input Ex.: array( 'onClick'=>'function_js()', );
     * @return String
     */
    public static function submitButton($name, Array $html_options = null) {

        $options = array(
            'type' => 'submit',
            'name' => $this->model . '[' . strtolower($name) . ']',
            'value' => ucfirst($name),
            'id' => $this->model . '_' . strtolower($name)
        );

        if ($html_options !== null)
            $options = array_merge($options, $html_options);
        $input = Html::tag($tag = "input", $options, $content = true, $open_tag = true, $close_tag = true);
        $input .= "\n\t\t";

        return $input;
    }

    /**
     * M�todo gerador de tags label
     * @param String $title Titulo do label
     * @param Array $html_options Op��es da tag label Ex.: array( 'class'=>'left clear', );
     * @return String
     */
    public static function labelField($title, Array $html_options = null) {
        $value = null;

        if ($value == null)
            $value = "";

        if (isset($html_options['value']))
            $value = $html_options['value'];

        $options = array(
            'for' => $this->model . '_' . strtolower($title)
        );

        if ($html_options !== null)
            $options = array_merge($options, $html_options);
        $label = Html::tag($tag = "label", $options, ucfirst($title), $open_tag = true, $close_tag = true);
        $label .= "\n\t\t";

        return $label;
    }

    /**
     * M�todo gerador de tags label
     * @param String $title Titulo do label
     * @param Array $html_options Op��es da tag label Ex.: array( 'class'=>'left clear', );
     * @return String
     */
    public static function textareaField($name, Array $html_options = null) {
        $value = null;
        if ($value == null)
            $value = "";

        if (!isset($html_options['name']))
            $html_options['name'] = $this->model . '[' . strtolower($name) . ']';
        if (isset($html_options['value']))
            $value = $html_options['value'];

        $options = array(
            'id' => $this->model . '_' . strtolower($name)
        );

        if ($html_options !== null)
            $options = array_merge($options, $html_options);
        $label = Html::tag($tag = "textarea", $options, $content = false, $open_tag = true, $close_tag = true);
        $label .= "\n\t\t";

        return $label;
    }

}
