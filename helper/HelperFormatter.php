<?php

/**
 * Class HelperFormatter
 *
 * CSP Framework
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core\helper;

Class HelperFormatter {

    static public function removeCharSpecialString($char = null) {

        //if (function_exists('iconv'))
            //return preg_replace('/[`^~\'"]/', null, iconv('UTF-8', 'ASCII//TRANSLIT', $char));
        
        //header('Content-Type: charset=utf-8');
        
        $char = str_replace(array("á", "à", "â", "ã", "ª"), "a", $char);
        $char = str_replace(array("é", "è", "ê"), "e", $char);
        $char = str_replace(array("í", "ì", "î"), "i", $char);
        $char = str_replace(array("ó", "ò", "ô", "õ", "º"), "o", $char);
        $char = str_replace(array("ú", "ù", "û"), "u", $char);
        $char = str_replace("ç", "c", $char);
        $char = str_replace(array("Á", "À", "Â", "Â"), "A", $char);
        $char = str_replace(array("É", "È", "Ê"), "E", $char);
        $char = str_replace(array("Í", "Ì", "Î"), "I", $char);
        $char = str_replace(array("Ó", "Ò", "Ô", "Õ"), "O", $char);
        $char = str_replace(array("Ú", "Ù", "Û"), "U", $char);
        $char = str_replace("Ç", "C", $char);
        $char = str_replace(array('\"', "\'"), "", $char);

        return $char;
    }

    static public function formateNumeric($value, $dec = 2, $separator = '.', $milhar = '') {
        $_value = str_replace(array('.', ','), '', $value);
        if (!HelperValidate::isNumeric($_value))
            return $value;
        return number_format($value, $dec, $separator, $milhar);
    }

    static public function formateDecimal($value, $dec = 2, $separator = '.') {
        $_value = str_replace(array('.', ','), '', $value);
        if (!HelperValidate::isNumeric($_value))
            return $value;
        else {
            if ((int) $dec < 2)
                $dec = 2;
            if (($separator != "," && $separator != "."))
                $separator = '.';


            $_fraction = explode($separator, $value);
            $fraction = '';
            if (count($_fraction) > 1)
                $fraction = substr($value, (-$dec));

            if (!$fraction)
                return $value;

            $decimal = substr($value, 0, (-$dec));
            $decimal = str_replace(array(",", "."), '', $decimal);
            $decimal = preg_replace("/[^0-9]/", "", $decimal);

            return $decimal . (( $fraction <> '00') ? $separator : '') . $fraction;
        }
    }

    static public function formateDate($date, $format = null) {
        if ($date == 0) {
            return '';
        }
        $timestamp = strtotime($date);
        if (HelperValidate::isNull($format)) {
            $format = 'd/m/Y H:i:s';
        }        
        return date($format, $timestamp);
    }

    static public function intToDecimal($number, $size_decimals = 2) {
        if (!HelperValidate::isNumeric($number))
            return (0.00);
        $num = preg_replace("/[^0-9]/", "", $number);
        $size = strlen($num);
        if ($size <= 12) {
            $size_int = ($size - $size_decimals);
            $int_number = substr($num, 0, ($size_int));
            $decimal_number = substr($num, -($size_decimals), $size);
            $int_to_decimal = (float) ($int_number . '.' . $decimal_number);

            return ($int_to_decimal);
        }
        return (0.00);
    }

    static public function formatBytes($size, $precision = 0, $isSuffix = false) {

        /**

          formatBytes(24962496);
          23.81M

          formatBytes(24962496, 0);
          24M

          formatBytes(24962496, 4);
          23.8061M
         */
        if (!$size) {
            $size = 1;
        }
        $base = log($size, 1024);
        $suffixes = array('', 'KB', 'MB', 'GB', 'TB');

        $result = str_replace(',', '.', round(pow(1024, $base - floor($base)), $precision));

        return $result . ($isSuffix === true ? ' ' . $suffixes[floor($base)] : '');
    }

}

//End class
