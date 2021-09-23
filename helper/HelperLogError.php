<?php

namespace core\helper;

use core\helper\HelperHtml;
use core\Tools;

class HelperLogError {

    static private $text;
    static private $path = 'LOGO_ERROR.txt';

    public function __construct($path = '') {
        if ($path) {
            self::$path = $path;
        }
    }

    static public function save($text, $path = '') {

        if (!$text) {
            return false;
        }
		self::$text = $text;
        if ($path) {
            self::$path = $path;
        }
        $fp = fopen(self::$path, "a+");
        $text = Tools::today(true) . ' => ' . self::$text . (Tools::count($_REQUEST) ? ' - URI: '.Tools::jsonEncode($_REQUEST):'');
        $escreve = fwrite($fp, $text . "\n");
		
        fclose($fp);
    }

}
