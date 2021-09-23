<?php

/**
 * Class Translate
 *
 * Api QVM
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core;

use core\helper\HelperFile;

Class Translate {

    private static $iso_language = '';

    const TYPE_ARRAY = 1;
    const TYPE_JSON = 2;
    const TYPE_OBJECT = 3;

    function __construct() {
        return null;
    }

    public static function setIso($iso) {
        self::$iso_language = $iso;
    }

    public static function getIso() {
        return self::$iso_language;
    }

    public static function l($str, $printf = null) {
        $translate = self::getTranslate($str);

        if ($printf !== null && is_array($printf))
            $translate = Translate::printfArray($translate, $printf);

        if (!empty($translate))
            return $translate;
        return $str;
    }

    /**
     * Check if string use a specif syntax for sprintf and replace arguments if use it
     *
     * @param $string
     * @param $args
     * @return string

     * Like printfArray, but accepts $args keys instead of order index. 
     * Both numeric and strings matching /[a-zA-Z0-9_-]+/ are allowed. 
     * 
     * Example: printfArray('y = %y$d, x = %x$1.1f', array('x' => 1, 'y' => 2)) 
     * Result:  'y = 2, x = 1.0' 
     *
     * Example 2:  $args = array('Mary', 60); 
     * printfArray2('Name: %s / Weight: %1.1f', $args); 
     * 	
     * $args also can be object, then it's properties are retrieved 
     * using Tools::getObjectVars(). 
     * 
     * '%s' without argument name works fine too. Everything vsprintf() can do 
     * is supported. 
     * 
     */
    public static function printfArray($string, array $args) {
        if (is_object($args)) {
            $args = Tools::getObjectVars($args);
        }

        $map = array_flip(array_keys($args));
        $new_str = preg_replace_callback('/(^|[^%])%([a-zA-Z0-9_-]+)\$/', function($m) use ($map) {
            return $m[1] . '%' . ($map[$m[2]] + 1) . '$';
        }, $string);

        return vsprintf($new_str, $args);
    }

    public static function getTranslate($str, $type = null, $iso_language = '') {
        if ($iso_language) {
            self::$iso_language = $iso_language;
        }
        $ini = self::getFileLanguage();
        $langs = array();
        if (is_array($ini)) {
            if (!empty($ini[self::$iso_language])) {
                $langs = $ini[self::$iso_language];
                foreach ($langs as $key => $value) {
                    $val = substr_count($value, '**') ? str_replace('**', '', $value) : $value;
                    if (substr_count($key, '*')) {
                        unset($langs[$key]);
                        $_k = Trim($key, '*');
                        $langs[$_k] = $val;
                    }
                }
                if ($type == null && !empty($langs[$str])) {
                    return $langs[$str];
                }
            }
        }
        if ($type == null) {
            return $str;
        } else {
            if ($type == self::TYPE_ARRAY) {
                return $langs;
            } elseif ($type == self::TYPE_JSON) {
                return json_encode($langs, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
            } elseif ($type == self::TYPE_OBJECT) {
                return json_decode(json_encode($langs, false), false);
            }
        }
    }

    private static function getFileLanguage() {
        if (self::$iso_language == '') {
            self::$iso_language = Context::getContext()->cookie->iso_language;
            if (self::$iso_language == '') {
                return null;
            }
        }
        //self::$iso_language = 'en'; 
        $translateSession = Tools::getSession('SYSTEM_TRANSALATE');
        if (!empty($translateSession)) {
            if (!empty($translateSession[self::$iso_language])) {
                return $translateSession;
            }
        }
        $file = _ROOT_ . '/translate/' . self::$iso_language . '.ini';
        $translate = HelperFile::parseIniFile($file);
        Tools::setSession('SYSTEM_TRANSALATE', $translate);
        return $translate;
    }

}
