<?php

use core\Tools;
use core\helper\HelperValidate;

function displayFatalError() {
    $error = null;
    if (function_exists('error_get_last'))
        $error = error_get_last();
    if ($error !== NULL && in_array($error['type'], array(E_ERROR, E_PARSE, E_COMPILE_ERROR)))
        echo '[CSP] Fatal error in module ' . substr(basename($error['file']), 0, -4) . ':<br />' . $error['message'];
}

//Functions
function escSQL($string, $htmlOK = false) {
    if (_MAGIC_QUOTES_GPC_)
        $string = stripslashes($string);
    if (!HelperValidate::isNumeric($string)) {
        $string = addslashes($string);
        if (!$htmlOK)
            $string = strip_tags(nl2br2($string));
    }

    return $string;
}

/**
 * Convert \n to <br />
 *
 * @param string $string String to transform
 * @return string New string
 */
function nl2br2($string) {
    $search = array("\\", "\0", "\n", "\r", "\x1a", "'", '"');
    $replace = array("\\\\", "\\0", "\\n", "\\r", "\Z", "\'", '\"');
    return str_replace($search, $replace, $string);
}

//Help debug
function d($obj) {
    return Tools::d($obj);
}

function p($obj) {
  return Tools::p($obj);
}
