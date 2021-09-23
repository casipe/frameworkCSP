<?php

/**
 *
 * Class HelperValidate
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2019 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core\helper;

use core\Tools;

//Validate é uma classe que realiza as validações gerais do sistema
Class HelperValidate {

    public $fields_errors = array();

    /**
     * Método que verifca a origem o host.
     * Verifica, por exemplo, se um formulário veio do host ou se foi clonado.
     * @return boolean
     */
    public static function isHost() {
        if (isset($_SERVER['HTTP_REFERER']) && (!stristr($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST'])))
            return false;
        return true;
    }

    /**
     * Método que verifica se o valor é numérico
     * @param $value
     * @return boolean
     */
    public static function isNumeric($value) {
        if (self::isNull($value))
            return false;
        return is_numeric($value);
    }

    /**
     * Método que verifica se o valor é um inteiro
     * @param $value
     * @return boolean
     */
    public static function isIntval($value) {
        return is_int($value);
    }

    /**
     * Método que verifica se o valor é um decimal
     * @param $value
     * @return boolean
     */
    public static function isDecimal($value) {
        if (!self::isNumeric($value))
            return false;
        else if (self::isNull($value))
            return false;

        if (substr_count($value, '.') > 1)
            return false;
        return true;
    }

    /**
     * Método que verifica se o valor é numérico
     * @param $value
     * @return boolean
     */
    public static function isNull($value) {
        return is_null($value);
    }

    /**
     * Método que verifica se o valor é um float
     * @param numero inteiro
     * @return boolean
     */
    public static function isFloat($value) {
        if (!self::isNull($value))
            return false;
        return is_float($value);
    }

    /**
     * Método que verifica se o valor é somente letra
     * @param $value [a-z A-z]
     * @return boolean
     */
    public static function isLetter($value, $special = false) {
        if ($special === true)
            $value = str_replace(array(' ', '-', '_', '.', ',', '&', '!', '?', ':', '#', '@'), '', $value);

        return (preg_match("/^[a-z]+?$/i", $value));
    }

    /**
     * Método que verifica se o valor é somente letras e numeros
     * @param $value [a-z A-z]
     * @return boolean
     */
    public static function isLetterNumeric($value) {
        return (preg_match("/^[\w\n\s]+$/i", $value));
    }

    /**
     * Método que verifica se o valor contem letras e numeros
     * @param $value [a-z A-z]
     * @return boolean
     */
    public static function isLetterAndNumber($value) {

        $letter = preg_replace("/[^A-Za-z]/", "", $value);
        if (!self::isLetter($letter))
            return false;

        $number = Tools::filterNum($value);
        if (!self::isNumeric($number))
            return false;

        return true;
    }

    /**
     * Método que verifica se a senha é forte
     * @param $value [a-z A-z]
     * @return boolean
     */
    public static function isForcePassword($value) {
        return (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $value));
    }

    /**
     * Método que verifica se a variável está vazia
     * @param $var variável
     * @return boolean
     */
    public static function isEmpty($var) {
        if (!isset($var)) {
            unset($var);
            return false;
        } else if (is_array($var)) {
            if (count($var))
                return true;
            return false;
        }
        else {
            if (empty($var) ||
                    $var == ' ' ||
                    $var == '  ' ||
                    $var == '   ' ||
                    $var == '    ' ||
                    $var == '     ' ||
                    $var == '      ')
                return true;
        }
        return false;
    }

    /**
     * Método que verifica as regras dos campos de formulário
     * Regras: required, email, letterOnly, numeric, min/max(caracter), 
     * @param $rules (array)
     * @return boolean ou array
     */
    function parseFields($rules, $post, $boolean = false) {
        if (!is_array($rules))
            return false;
        if (!is_null($post) && !is_array($post))
            return false;
        if (is_null($post))
            $post = $_POST;

        if (isset($post) && count($post)) {
            foreach ($rules as $key => $field) {
                $is_name_label = false;
                foreach ($field as $k => $_val) {
                    $name_label = str_replace(':', '', strstr($_val, ':'));
                    if (!empty($name_label)) {
                        $is_name_label = true;
                        break;
                    }
                }
                foreach ($field as $k => $val) {

                    //Verifica se o campo existe
                    if (isset($post[$key]) AND ! empty($post[$key])) {
                        if ($is_name_label)
                            $label = $name_label;
                        else
                            $label = $key;

                        $value = $post[$key];
                        switch ($val) {
                            //Campo somente letras
                            case 'required':
                                if (self::isEmpty($value))
                                    $this->fields_errors[$key] = "O campo " . $label . " é necessário.";
                                break;

                            //Campo somente letras
                            case 'letterOnly':
                                if (!self::isLetter($value, true))
                                    $this->fields_errors[$key] = "Somente letra no campo " . $label;
                                break;

                            //Campo somente numeros
                            case 'numeric':
                                if (!$this->isNumeric($value))
                                    $this->fields_errors[$key] = "Somente número no campo " . $label;
                                break;

                            //Validar campo com email
                            case 'email':
                                if (!self::isEmail($value))
                                    $this->fields_errors[$key] = "Email inválido no campo " . $label;
                                break;

                            //Validar campo com url
                            case 'url':
                                if (!self::isUrl($value))
                                    $this->fields_errors[$key] = "Url inválido no campo " . $label;
                                break;
                        }

                        //Verifica se alguma regra do campo é um array 
                        if (is_array($val) && empty($this->fields_errors)) {
                            foreach ($val as $k => $v) {
                                switch ($k) {
                                    //Numero minimo de carater
                                    case 'min':
                                        if (strlen($value) < (int) $v)
                                            $this->fields_errors[$key] = "No mínimo, {$v} caracteres no campo " . $label;
                                        break;

                                    //Numero maximo de carater
                                    case 'max':
                                        if (strlen($value) > (int) $v)
                                            $this->fields_errors[$key] = "No máximo, {$v} caracteres no campo " . $label;
                                        break;
                                }
                            }
                        }
                    }
                    else {
                        // Retorna mensagem de preenchimento obrigatório
                        if ($is_name_label AND $val == 'required')
                            $this->fields_errors[$key] = "Preencha o campo " . $name_label;
                        else
                        if ($val == 'required')
                            $this->fields_errors['required'] = "Preencha o(s) campo(s) obrigatório(s)";
                        break;
                    }
                }
            }
        }

        if ($boolean === true) {
            // Retorna falso se houver algum erro
            if (self::isEmpty($this->fields_errors))
                return true;
            return false;
        }
        else {
            if (self::isEmpty($this->fields_errors))
                return $this->fields_errors;
            return array();
        }
    }

    /**
     * Método que verifica se o email é válido
     * @param $email email
     * @return boolean
     */
    public static function isEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            return false;
        return true;
    }

    /**
     * Método que verifica se existe a inserção CC ou BCC no cabeçalhos dos email
     * @param $str 
     * @return boolean
     */
    public static function isEmailCC(String $str) {
        if (preg_match("/bcc:|cc:|multipart|\[url|Content-Type:/i", implode($str)))
            return true;
        return false;
    }

    /**
     * Método que verifica se a url é válido
     * @param $url url
     * @return boolean
     */
    public static function isUrl($url) {
        if (!filter_var($url, FILTER_VALIDATE_URL))
            return false;
        return preg_match('|^http(s)?://[a-z0-9-]+(\.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url);
    }

    /**
     * Método que verifica se existem códigos com links 
     * @param $str, $out
     * @return boolean
     */
    public static function isLink(String $str, $out = null) {
        if (preg_match_all("/<a|http:/i", implode($str), $out) > 3)
            return true;
        return false;
    }

    /**
     * Método que verifica se a URL pertence a ao domínio referenciado
     * @param $url String Url desejada
     * @param $url_validate String Dominio de referencia, ou seja,
     * 	a URL "http://www.casipe.com.br.php" pertece ao DOMÍNO "www.casipe.com.br" retorna true, caso o contrário, false
     * @return boolean
     */
    public static function isDomain($url, $url_validate) {
        if (!self::isUrl($url))
            return false;

        if (preg_match("/{$url_validate}/i", $url))
            return true;
        return false;
    }

    /**
     * Verifica se a data está correta
     */
    public static function isDate($date, $format = 'Y-m-d H:i:s') {
        $d = \DateTime::createFromFormat($format, $date);
        return (boolean) ($d && $d->format($format) == $date);
    }

    public static function isAlphabetic($str) {
        return ctype_alpha($str);
    }

    public static function isAlphanumeric($str) {
        return ctype_alnum($str);
    }

    /**
     * Verifica se  o CNPJ é verdadeiro
     */
    public static function isCnpj($cnpj) {
        $cnpj = Tools::filterNum($cnpj);

        if (strlen($cnpj) <> 14)
            return 0;

        $soma1 = ($cnpj[0] * 5) +
                ($cnpj[1] * 4) +
                ($cnpj[2] * 3) +
                ($cnpj[3] * 2) +
                ($cnpj[4] * 9) +
                ($cnpj[5] * 8) +
                ($cnpj[6] * 7) +
                ($cnpj[7] * 6) +
                ($cnpj[8] * 5) +
                ($cnpj[9] * 4) +
                ($cnpj[10] * 3) +
                ($cnpj[11] * 2);

        $resto = $soma1 % 11;
        $digito1 = $resto < 2 ? 0 : 11 - $resto;

        $soma2 = ($cnpj[0] * 6) +
                ($cnpj[1] * 5) +
                ($cnpj[2] * 4) +
                ($cnpj[3] * 3) +
                ($cnpj[4] * 2) +
                ($cnpj[5] * 9) +
                ($cnpj[6] * 8) +
                ($cnpj[7] * 7) +
                ($cnpj[8] * 6) +
                ($cnpj[9] * 5) +
                ($cnpj[10] * 4) +
                ($cnpj[11] * 3) +
                ($cnpj[12] * 2);

        $resto = $soma2 % 11;
        $digito2 = $resto < 2 ? 0 : 11 - $resto;

        return (($cnpj[12] == $digito1) && ($cnpj[13] == $digito2));
    }

    /**
     * Verifica se  o CPF é verdadeiro
     */
    public static function isCpf($cpf) {
        $cpf = Tools::filterNum($cpf);
        // Verifiva se o número digitado contém todos os digitos
        $cpf = str_pad(preg_replace('[^0-9]', '', $cpf), 11, '0', STR_PAD_LEFT);
        // Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
        if (strlen($cpf) != 11 || $cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999')
            return false;
        else {   // Calcula os números para verificar se o CPF é verdadeiro
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf[$c] != $d) {
                    return false;
                }
            }
            return true;
        }
    }

}
