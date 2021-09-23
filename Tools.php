<?php

/**
 * Class Tools
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 20121 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core;

use core\helper\HelperValidate;

class Tools {

    static public function Configuration($name) {
        $command = new Model();
        $value = $command->getValue('SELECT value FROM `' . _DB_PREFIX_ .
                'configuration` WHERE name = "' . escSQL($name) . '"');
        if (!$command->getNumberError())
            return $value;
        return null;
    }

    static public function allowedIP() {
        $allowed_ip = '127.0.0.1, localhost' . self::Configuration('allowed_ip');
        $ips = explode(',', $allowed_ip);
        if (!empty($ips[0]) && in_array($_SERVER['REMOTE_ADDR'], $ips))
            return false;
        return true;
    }

    static public function IsUrlReferer() {
        if (isset($_SERVER['HTTP_REFERER'])) {
            $url_r = str_replace(array('http://', 'https://'), '', $_SERVER['HTTP_REFERER']);
            $url_r = explode('/', $url_r);
            $url_referer = $url_r[0];
            if (($url_referer <> $_SERVER['HTTP_HOST']))
                return false;
            return true;
        }
        return false;
    }

    static public function IsUrlSsl() {
        return (isset($_SERVER['HTTPS']) and $_SERVER['HTTPS'] == 'on');
    }

    static public function RedirectHttps($forceSSL = null) {
        if (($forceSSL === null and _URL_SSL_) or $forceSSL === true) {
            if (!Tools::IsUrlSsl()) {
                $redirect_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                header('HTTP/1.1 301 Moved Permanently');
                header("Location: $redirect_url");
                exit();
            }
        } else {
            if ($forceSSL === false && Tools::IsUrlSsl()) {
                $redirect_url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                header('HTTP/1.1 301 Moved Permanently');
                header("Location: $redirect_url");
                exit();
            }
        }
    }

    static public function IpSupport($ip) {
        if (!$ip) {
            return false;
        }
        //IP Bots
        if ('66.' == substr($ip, 0, 3)) {
            return true;
        }
        //End IP Bots

        $is_ip_support = explode(';', _IS_IP_SUPPORT_);
        foreach ($is_ip_support as $value) {
            $value = trim($value);
            if (empty($value))
                continue;
            if (trim($value) == $ip)
                return true;
        }
        return false;
    }

    /**
     * Recupera e retorna o host do visitante
     *
     *
     * @return String
     */
    static public function getObjectVars($obj) {
        if (!is_object($obj)) {
            return null;
        }
        return get_object_vars($obj);
    }

    /**
     * Recupera e retorna o host do visitante
     *
     *
     * @return String
     */
    static public function getHostByAddr() {
        return gethostbyaddr($_SERVER['REMOTE_ADDR']);
    }

    static public function IsAjax() {
        $headers = self::getallheaders();
        return (isset($headers['X-Requested-With']) && Tools::strtolower($headers['X-Requested-With']) == 'xmlhttprequest');
    }

    static public function getAllHeaders() {
        $headers = array();
        if (function_exists('apache_request_headers')) {
            $headers = apache_request_headers();
        } else {
            if (function_exists('getallheaders')) {
                $headers = getallheaders();
            } else {
                foreach ($_SERVER as $name => $value) {
                    if (substr($name, 0, 5) == 'HTTP_') {
                        $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr(
                                                                        $name, 5
                                )))))] = $value;
                    }
                }
            }
        }
        return $headers;
    }

    static public function token($hash = null) {
        return md5(uniqid(rand(), true)) . $hash;
    }

    static public function randomNumber($length) {
        $min = 1 . str_repeat(0, $length - 1);
        $max = str_repeat(9, $length);

        return mt_rand($min, $max);
    }

    static public function IsEmpty($str = null) {
        $str = str_replace(' ', '', $str);
        if (Tools::strlen($str) < 1 or empty($str)) {
            return true;
        }
        return false;
    }

    static public function IsNull($str = null) {
        return (is_null($str));
    }

    static public function addQueryArgs() {
        $ret = '';
        $args = func_get_args();
        if (is_array($args[0])) {
            if (self::count($args) < 2 || false === $args[1]) {
                $uri = $_SERVER['REQUEST_URI'];
            } else {
                $uri = $args[1];
            }
        } else {
            if (self::count($args) < 3 || false === $args[2]) {
                $uri = $_SERVER['REQUEST_URI'];
            } else {
                $uri = $args[2];
            }
        }

        if ($frag = strstr($uri, '#')) {
            $uri = substr($uri, 0, -Tools::strlen($frag));
        } else {
            $frag = '';
        }

        if (0 === stripos($uri, 'http://')) {
            $protocol = 'http://';
            $uri = substr($uri, 7);
        } elseif (0 === stripos($uri, 'https://')) {
            $protocol = 'https://';
            $uri = substr($uri, 8);
        } else {
            $protocol = '';
        }

        if (strpos($uri, '?') !== false) {
            $parts = explode('?', $uri, 2);
            if (1 == self::count($parts)) {
                $base = '?';
                $query = $parts[0];
            } else {
                $base = $parts[0] . '?';
                $query = $parts[1];
            }
        } elseif ($protocol || strpos($uri, '=') === false) {
            $base = $uri . '?';
            $query = '';
        } else {
            $base = '';
            $query = $uri;
        }

        parseString($query, $qs);
        $qs = self::urlEncodeDeep($qs); // this re-URL-encodes things that were already in the query string
        if (is_array($args[0])) {
            $kayvees = $args[0];
            $qs = array_merge($qs, $kayvees);
        } else {
            $qs[$args[0]] = $args[1];
        }

        foreach ($qs as $k => $v) {
            if ($v === false) {
                unset($qs[$k]);
            }
        }

        $ret = self::buildQuery($qs);
        $ret = trim($ret, '?');
        $ret = preg_replace('#=(&|$)#', '$1', $ret);
        $ret = $protocol . $base . $ret . $frag;
        $ret = rtrim($ret, '?');
        return $ret;
    }

    static public function isString($data) {
        return is_string($data);
    }

    static public function strtolower($str) {
        if (!self::isString($str)) {
            return;
        }
        if (function_exists('mb_strtolower')) {
            return mb_strtolower($str, 'utf-8');
        }
        return strtolower($str);
    }

    static public function strtoupper($str) {
        if (!self::isString($str)) {
            return;
        }
        if (function_exists('mb_strtoupper')) {
            return mb_strtoupper($str, 'utf-8');
        }
        return strtoupper($str);
    }

    static public function strlen($str, $encoding = 'UTF-8') {
        $str = html_entity_decode($str, ENT_COMPAT, 'UTF-8');
        if (function_exists('mb_strlen')) {
            return mb_strlen($str, $encoding);
        }
        return strlen($str);
    }

    //Remove barras invertidas de uma string
    static public function stripslashes($str) {
        if (!self::isString($str)) {
            return;
        }
        if (_PS_MAGIC_QUOTES_GPC_) {
            $str = stripslashes($str);
        }
        return $str;
    }

    static public function addslashes($str) {
        if (!self::isString($str)) {
            return;
        }
        return addslashes($str);
    }

    static public function substr($str, $start, $length = false, $encoding = 'utf-8') {
        if (!self::isString($str)) {
            return;
        }
        if (function_exists('mb_substr'))
            return mb_substr($str, (int) $start, ($length === false ? Tools::strlen($str) : (int) $length), $encoding);

        return substr($str, $start, ($length === false ? Tools::strlen($str) : (int) $length));
    }

    static public function strpos($str, $find, $offset = 0, $encoding = 'UTF-8') {
        if (!self::isString($str)) {
            return;
        }
        if (function_exists('mb_strpos')) {
            return mb_strpos($str, $find, $offset, $encoding);
        }
        return strpos($str, $find, $offset);
    }

    static public function strrpos($str, $find, $offset = 0, $encoding = 'utf-8') {
        if (!self::isString($str)) {
            return;
        }
        if (function_exists('mb_strrpos')) {
            return mb_strrpos($str, $find, $offset, $encoding);
        }
        return strrpos($str, $find, $offset);
    }

    static public function ucfirst($str) {
        if (!self::isString($str)) {
            return;
        }
        return Tools::strtoupper(Tools::substr($str, 0, 1)) . Tools::substr($str, 1);
    }

    static public function ucwords($str) {
        if (!self::isString($str)) {
            return;
        }
        if (function_exists('mb_convert_case')) {
            return mb_convert_case($str, MB_CASE_TITLE);
        }
        return ucwords(Tools::strtolower($str));
    }

    static public function parseString($str, &$array) {
        if (!self::isString($str)) {
            return false;
        }
        parse_str($str, $array);
        if (get_magic_quotes_gpc()) {
            $array = stripslashes_deep($array);
        }
        $array = applyFilters('parse_string', $array);
    }

    static public function recursiveArray($elements, $parentId = null) {
        $branch = array();

        foreach ($elements as $element) {
            if ($element['parent_id'] == $parentId) {
                $children = Tools::recursiveArray($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[] = $element;
            }
        }

        return $branch;
    }

    /*
      Mascara string:
      Ex.:
      $cnpj = "11222333000199";
      $cpf = "00100200300";
      $cep = "08665110";
      $data = "10102010";
      $valor = "100000";

     * * mask($cnpj,'##.###.###/####-##');
     * * mask($cpf,'###.###.###-##');
     * * mask($cep,'#####-###');
     * * mask($data,'##/##/####');
     * * mask($valor,'#.###,##');
     */

    static public function mask($val, $mask) {
        $maskared = '';
        $k = 0;
        for ($i = 0; $i <= Tools::strlen($mask) - 1; $i++) {
            if ($mask[$i] == '#') {
                if (isset($val[$k]))
                    $maskared .= $val[$k++];
            } else {
                if (isset($mask[$i]))
                    $maskared .= $mask[$i];
            }
        }
        return $maskared;
    }

    /**
     * Filtra a string e retorna somente as letras
     *
     * @param String $string, Boolean $utf8
     * @return String
     */
    static public function filterLetter($string, $utf8 = false) {
        if (!self::isString($string)) {
            return false;
        }
        if (!$utf8) {
            return preg_replace("/[^A-Za-z]/", "", $string);
        }
        return preg_replace("/[^A-Za-zá-üÁ-Ü]/", "", $string);
    }

    /**
     * Filtra a string e retorna somente os numeros
     *
     * @param String $str
     * @return String
     */
    static public function filterNum($str) {
        if (!self::isString($str)) {
            return;
        }
        $string = str_replace(",", ".", $str);
        return preg_replace("/[^0-9]/", "", $string);
    }

    static public function applyFilters($tag, $value) {
        global $filter, $merged_filters, $current_filter;

        $args = array();

        // Do 'all' actions first
        if (isset($filter['all'])) {
            $current_filter[] = $tag;
            $args = func_get_args();
            self::callAllHook($args, $filter);
        }

        if (!isset($filter[$tag])) {
            if (isset($filter['all']))
                array_pop($current_filter);
            return $value;
        }

        if (!isset($filter['all']))
            $current_filter[] = $tag;

        // Sort
        if (!isset($merged_filters[$tag])) {
            ksort($filter[$tag]);
            $merged_filters[$tag] = true;
        }

        reset($filter[$tag]);

        if (empty($args)) {
            $args = func_get_args();
        }
        do {
            foreach ((array) current($filter[$tag]) as $the_)
                if (!is_null($the_['function'])) {
                    $args[1] = $value;
                    $value = call_user_func_array($the_['function'], array_slice($args, 1, (int) $the_['accepted_args']));
                }
        } while (next($filter[$tag]) !== false);

        array_pop($current_filter);

        return $value;
    }

    /**
     * Calls the 'all' hook, which will process the functions hooked into it.
     *
     * The 'all' hook passes all of the arguments or parameters that were used for
     * the hook, which this function was called for.
     *
     * This function is used internally for applyFilters(), do_action(), and
     * do_action_ref_array() and is not meant to be used from outside those
     * functions. This function does not check for the existence of the all hook, so
     * it will fail unless the all hook exists prior to this function call.
     *    
     * @param array $args The collected parameters from the hook that was called.
     * @param string $hook Optional. The hook name that was used to call the 'all' hook.
     */
    static public function callAllHook($args, $filter) {
        reset($filter['all']);
        do {
            foreach ((array) current($filter['all']) as $the_) {
                if (!is_null($the_['function'])) {
                    call_user_func_array($the_['function'], $args);
                }
            }
        } while (next($filter['all']) !== false);
    }

    static public function urlEncodeDeep($value) {
        return (is_array($value)) ? array_map('urlencode_deep', $value) : urlencode($value);
    }

    /**
     * Build URL query based on an associative and, or indexed array.
     *
     * This is a convenient method for easily building url queries. It sets the
     * separator to '&' and uses self::httpBuildQuery() method.
     *
     * @see self::httpBuildQuery() Used to build the query
     * @link http://us2.php.net/manual/en/function.http-build-query.php more on what
     *         http_buildQuery() does.
     *
     * @since 2.3.0
     *
     * @param array $data URL-encode key/value pairs.
     * @return string URL encoded string
     */
    static public function buildQuery($data) {
        if (!self::isString($data)) {
            return $data;
        }
        return self::httpBuildQuery($data, null, '&', '', false);
    }

    static public function httpBuildQuery($data, $prefix = null, $sep = null, $key = '', $urlencode = true) {
        $ret = array();

        foreach ((array) $data as $k => $v) {
            if ($urlencode)
                $k = urlencode($k);
            if (is_int($k) && $prefix != null)
                $k = $prefix . $k;
            if (!empty($key))
                $k = $key . '%5B' . $k . '%5D';
            if ($v === null)
                continue;
            elseif ($v === false)
                $v = '0';

            if (is_array($v) || is_object($v))
                array_push($ret, self::httpBuildQuery($v, '', $sep, $k, $urlencode));
            elseif ($urlencode)
                array_push($ret, $k . '=' . urlencode($v));
            else
                array_push($ret, $k . '=' . $v);
        }

        if (null === $sep)
            $sep = ini_get('arg_separator.output');
        return implode($sep, $ret);
    }

    /**
     * Properly strip all HTML tags including script and style
     *
     * @since 2.9.0
     *
     * @param string $string String containing HTML tags
     * @param bool $remove_breaks optional Whether to remove left over line breaks and white space chars
     * @return string The processed string.
     */
    static public function stripAllTags($string, $remove_breaks = false) {
        $string = preg_replace('@<(script|style)[^>]*?>.*?</\\1>@si', '', $string);
        $string = strip_tags($string);

        if ($remove_breaks)
            $string = preg_replace('/[\r\n\t ]+/', ' ', $string);

        return trim($string);
    }

    static public function trimWords($text, $num_words = 55) {
        $original_text = $text;
        $text = stripAllTags($text);
        $words_array = preg_split(
                "/[\n\r\t ]+/", $text, $num_words + 1, PREG_SPLIT_NO_EMPTY
        );

        $sep = ' ';

        if (self::count($words_array) > $num_words) {
            array_pop($words_array);
            $text = implode($sep, $words_array);
            $text = $text . $more;
        } else {
            $text = implode($sep, $words_array);
        }
        return self::applyFilters('trim_words', $text, $num_words, '', $original_text);
    }

    /**
     *
     * @param boolean $path
     * @return String
     */
    static public function url($path = true) {
        $url_site = str_replace(array('http://', 'https://'), "", _URL_BASE_);

        if (Tools::IsUrlSsl()) {
            $url = "https://" . $url_site;
        } else {
            $url = "http://" . $url_site;
        }
        return $url . ($path === true ? '/' . _PATH_ : '');
    }

    /**
     *  Recupera e retorna a PATH base do aplicativo(site)
     *
     * @param String $basePath
     * @return String
     */
    static public function basePATH($basePath) {
        $base = str_replace(array("\\", "//"), '', $basePath);
        $arr = explode("/", $base);
        return $_SERVER['DOCUMENT_ROOT'] . (isset($arr[1]) ? '/' . $arr[1] . '/' : '/');
    }

    /**
     * Recupera e retorna a URL base do aplicativo(site)
     *
     * @return String
     */
    static public function baseURL() {
        return self::url();
    }

    /**
     * Recupera e retorna a URL absoluta do aplicativo(site)
     *
     * @param String $ssl
     * @return String
     */
    static public function absoluteURL() {
        return self::url(false);
    }

    /**
     *  Recupera e retorna a URL do diretorio de imagens do aplicativo(site)
     * @return String
     */
    static public function baseURLImage($path_app = '') {
        if (!$path_app)
            $path_app = _PATH_;
        return self::absoluteURL(Tools::IsUrlSsl()) . $path_app . 'images';
    }

    /**
     * Recupera e retorna o dominio base do aplicativo(site)
     *
     *
     * @return String
     */
    static public function getBaseDomain() {
        return _DOMAIN_;
    }

    /**
     * Recupera e retorna o dominio do aplicativo(site)
     *
     * @param String $ssl
     * @return String
     */
    static public function getDomain($is_ssl = false) {
        return (($is_ssl) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'];
    }

    /**
     * Recupera e retorna o caminho fisico do aplicativo(site)
     *
     * @param String $ssl
     * @return String
     */
    static public function physicalUri() {
        return str_replace('index.php', null, $_SERVER['SCRIPT_NAME']);
    }

    /**
     * Redirecionat pagina
     *
     * @param String $url
     * @return Void
     */
    static public function redirect($url) {
        echo '<meta http-equiv="refresh" content="0;url=' . $url . '">';
        @ob_start();
        @ob_end_clean();
        header('Location:' . $url);
        exit;
    }

    /**
     * Redirecionat pagina de erro
     *
     * @param String $url
     * @return Void
     */
    static public function redirectErrorPage() {
        self::redirect(self::url() . '/error');
    }

    static public function isSubmit($name, $key = null) {
        if (!is_null($key)) {
            if (isset($_POST[$key][$name]))
                return true;
        } else
        if (isset($_POST[$name]))
            return true;
        return false;
    }

    /**
     *
     * @param String $name 
     * @param String $key = null 
     * @param String $type = null
     * @return Mixed
     */
    static public function getValue($name, $key = null, $type = null) {
        if (self::IsEmpty($name))
            return '';
        if (self::strtoupper($name) == 'POST')
            return (isset($_POST) and self::count($_POST)) ? true : false;
        else
        if (self::strtoupper($name) == 'GET')
            return (isset($_GET) and self::count($_GET)) ? true : false;

        if (!is_null($key)) {
            if (isset($_POST[$key][$name]))
                return $_POST[$key][$name];
        } else {
            if (self::strtoupper($type) == 'POST') {
                if (isset($_POST[$name]))
                    return $_POST[$name];
            } else if (self::strtoupper($type) == 'GET') {
                if (!isset($_GET[$name]))
                    return $_GET[$name];
            } else {
                if (isset($_POST[$name]))
                    return $_POST[$name];

                if (isset($_GET[$name]))
                    return $_GET[$name];
            }
        }
        return '';
    }

    /**
     *
     * @param String $name 
     * @param String $key = null 
     * @return Array|null
     */
    static public function getValueFiles($name, $key = null) {
        if (self::IsEmpty($name)) {
            return null;
        }

        if (!is_null($key)) {
            if (isset($_FILES[$name][$key]))
                return $_FILES[$name][$key];
        } else {

            if (isset($_FILES[$name])) {
                $files = $_FILES[$name];
                if (!empty($files)) {

                    if (self::count($files['name']) > 1) {
                        $array_files = array();
                        foreach ($files as $k => $file) {
                            foreach ($file as $key => $value) {

                                $array_files[$key][$k] = $value;
                                if ($k == 'name') {
                                    $arr = explode('.', $value);
                                    $array_files[$key]['ext'] = array_pop($arr);
                                }
                            }
                        }
                        return $array_files;
                    } else
                        return $files;
                }
            }
        }
        return null;
    }

    static public function isParam($value) {
        if (isset($_GET[$value]))
            return true;

        return (isset($_POST[$value]));
    }

    static public function isPost() {
        return self::count($_POST) > 0;
    }

    static public function encryptID($id, $iv = '') {
        if (Tools::strlen("$id") < 1) {
            return;
        }
        if (Tools::strlen($iv) < 1) {
            $iv = self::ivRijndael();
        }
        $Encryption = new Encryption('ID', $iv);

        $str = str_replace('==', '', $Encryption->encrypt($id));
        $encrypt = $str;
        return str_replace(
                array(
            '+',
            '&',
            '=',
            '?',
            '/',
            '/\/'
                ), array(
            'AA1aGTe',
            'AA2dRrY',
            'AA3lvWs',
            'AA4wcGy',
            'AA5oKQx',
            'AA6rHQs'
                ), $encrypt
        );
    }

    static public function decryptID($id, $iv = '') {
        if (Tools::strlen($id) < 1)
            return;
        $id = str_replace(
                array(
            'AA1aGTe',
            'AA2dRrY',
            'AA3lvWs',
            'AA4wcGy',
            'AA5oKQx',
            'AA6rHQs'
                ), array(
            '+',
            '&',
            '=',
            '?',
            '/',
            '/\/'
                ), $id
        );

        if (Tools::strlen($iv) < 1)
            $iv = self::ivRijndael();
        $Encryption = new Encryption('ID', $iv);
        $str = $Encryption->decrypt($id);

        /*
          $str_len = Tools::strlen($str);
          if((int) $str_len && $str_len>5)
          {
          $encrypt = '';
          for($i=0; $i<$str_len; $i++)
          {
          $encrypt .= $str[$i].((($i+1)%5 == 0 && ($str[$i]=='-')) ? '-' : '');
          }
          }
          else */
        $decrypt = $str;

        return $decrypt;
    }

    static public function ivRijndael($iv = '') {
        if (Tools::strlen($iv) < 1)
            $iv = date('dmY');

        return self::encrypt($iv);
    }

    static public function cryptoJSAesEncrypt($passphrase, $plain_text, $salt = null, $iv = null, $json = true) {

        if (!$salt) {
            $salt = openssl_random_pseudo_bytes(256);
        }

        if (!$iv) {
            $iv = openssl_random_pseudo_bytes(16);
        }
        //on PHP7 can use random_bytes() istead openssl_random_pseudo_bytes()
        //or PHP5x see : https://github.com/paragonie/random_compat

        $iterations = 999;
        $key = hash_pbkdf2("sha512", $passphrase, $salt, $iterations, 64);

        $encrypted_data = openssl_encrypt($plain_text, 'aes-256-cbc', hex2bin($key), OPENSSL_RAW_DATA, $iv);

        $data = array("ciphertext" => base64_encode($encrypted_data), "iv" => bin2hex($iv), "salt" => bin2hex($salt));

        return $json === true ? json_encode($data) : json_decode(json_encode($data));
    }

    static public function cryptoJSAesDecrypt($passphrase, $jsonString = null, $salt = null, $iv = null) {

        if ($jsonString) {
            $jsondata = json_decode($jsonString, true);
        } else {
            $jsondata = array(
                'salt' => $salt,
                'iv' => $iv
            );
        }
        try {
            $salt = hex2bin($jsondata["salt"]);
            $iv = hex2bin($jsondata["iv"]);
        } catch (Exception $e) {
            return null;
        }

        $ciphertext = base64_decode($jsondata["ciphertext"]);
        $iterations = 999; //same as js encrypting 

        $key = hash_pbkdf2("sha512", $passphrase, $salt, $iterations, 64);

        $decrypted = openssl_decrypt($ciphertext, 'aes-256-cbc', hex2bin($key), OPENSSL_RAW_DATA, $iv);

        return $decrypted;
    }

    static public function formateFilterPostToDb($array, $condition = true, $type = 'LIKE', $like_begin = true, $like_end = true, $negate = false) {
        $return = null;
        if ($type != '' and ( $type === 'LIKE' or $type === 'NOTLIKE' or $type == 'STRCMP')) {
            if ($type == '')
                $type = ($negate === true ? '<>' : '=');
            else
            if ($type == 'NOTLIKE')
                $type = 'NOT LIKE';
            $is_like = ($type === 'LIKE' or $type === 'NOTLIKE');
            if (is_array($array) and self::count($array) > 0) {
                foreach ($array as $ind => $val) {
                    $fields[] = "{$ind} " . $type . " '" . (($is_like and $like_begin == true) ? '%' : '') . "{$val}" . (($is_like and $like_end == true) ? '%' : '') . "'";
                }
                $return = implode(' ' . (($condition === false) ? 'OR' : 'AND') . ' ', $fields);
            }
        }
        return ($return);
    }

    /**
     * Iniciar uma sess達o
     *
     * @param string $key, $value
     * @return Void
     */
    static public function setSession($key, $value) {
        if (!$key or ! $value) {
            return;
        }
        self::startSession();
        $_SESSION[$key] = $value;
    }

    /**
     * Recuperar uma sess達o
     *
     * @param string $key
     * @return Mixed
     */
    static public function getSession($key) {
        if (!Tools::isSession($key)) {
            return;
        }
        return $_SESSION[$key];
    }

    /**
     * Remove uma sess達o
     *
     * @param string $key
     * @return Void
     */
    static public function removeSession($key) {
        if (!Tools::isSession($key)) {
            return;
        }
        self::startSession();
        unset($_SESSION[$key]);
    }

    /**
     * Destroi sessão do sistema
     *     
     * @return Void
     */
    static public function destroySession() {
        if (session_status() == 2) {
            @session_destroy();
        }
    }

    /**
     * Verifica se  uma variavel existe na sessao
     *
     * @param string $key
     * @return Mixed
     */
    static public function isSession($key) {
        self::startSession();
        return isset($_SESSION[$key]);
    }

    /**
     * Verifica se  uma variavel existe na sessao
     *
     * @param string $key
     * @return Mixed
     */
    static public function startSession($time = 30) {
        if (session_status() != PHP_SESSION_ACTIVE) {
            //session_cache_limiter('private');
            session_cache_expire($time); //manter a sessao por 30 minutos
            @session_start();
        }
    }

    static public function convertDate($date, $formate_out = 'Y-m-d', $formate_in = 'yyyymmdd') {

        if (Tools::strlen($date) < 10)
            return '';
        $res = '';

        $date = self::filterNum($date);

        if ($formate_in == 'ddmmyyyy') {
            $D = $date[0] . $date[1];
            $M = $date[2] . $date[3];
            $Y = $date[4] . $date[5] . $date[6] . $date[7];
        } else
        if ($formate_in == 'mmddyyy') {
            $D = $date[2] . $date[3];
            $M = $date[0] . $date[1];
            $Y = $date[4] . $date[5] . $date[6] . $date[7];
        } else {
            $D = $date[6] . $date[7];
            $M = $date[4] . $date[5];
            $Y = $date[0] . $date[1] . $date[2] . $date[3];
        }


        if ($formate_out == 'Y-m-d') {
            if (!isset($date[0]) || !isset($date[1]) || !isset($date[2]))
                return '';
            $res = $Y . '-' . $M . '-' . $D;
        } else
        if ($formate_out == 'Y/m/d') {
            if (!isset($date[0]) || !isset($date[1]) || !isset($date[2]))
                return '';
            $res = $Y . '/' . $M . '/' . $D;
        } else
        if ($formate_out == 'd-m-Y') {
            if (!isset($date[0]) || !isset($date[1]) || !isset($date[2]))
                return '';
            $res = $D . '-' . $M . '-' . $Y;
        } else
        if ($formate_out == 'd/m/Y') {
            if (!isset($date[0]) || !isset($date[1]) || !isset($date[2]))
                return '';
            $res = $D . '/' . $M . '/' . $Y;
        }
        return $res;
    }

    static public function convertDateToSQL($date, $formate = 'd/m/Y') {
        if ($formate == 'Y-m-d') {
            $date = explode('-', $date);
            if (!isset($date[0]) || !isset($date[1]) || !isset($date[2]))
                return '';
            $d = $date[2];
            $m = $date[1];
            $Y = $date[0];
        } else
        if ($formate == 'Y/m/d') {
            $date = explode('/', $date);
            if (!isset($date[0]) || !isset($date[1]) || !isset($date[2]))
                return '';
            $d = $date[2];
            $m = $date[1];
            $Y = $date[0];
        } else
        if ($formate == 'd-m-Y') {
            $d = explode('-', $date);
            if (!isset($date[0]) || !isset($date[1]) || !isset($date[2]))
                return '';
            $d = $date[0];
            $m = $date[1];
            $Y = $date[2];
        } else
        if ($formate == 'd/m/Y') {
            $date = explode('/', $date);
            if (!isset($date[0]) || !isset($date[1]) || !isset($date[2]))
                return '';
            $d = $date[0];
            $m = $date[1];
            $Y = $date[2];
        } else
            return '';
        return "$Y-$m-$d";
    }

    static public function addLineLog($file = null, $line = null, $txt_log = null) {
        $file = explode("\\", __file__);
        $file = array_pop($file);
        echo "Linha: " . $line . " - File: " . $file;
    }

    static public function hash($string = '', $md5 = false) {

        if (!$string) {
            $string = microtime(true);
        }
        if ($md5 === true) {
            $string = md5(md5($string));
        }
        return hash('ripemd160', $string);
    }

    static public function pad($input, $size, $char, $pad = null) {
        if (empty($input) or ! (int) $size)
            return;
        switch ($pad) {
            case "L":
                $pad = STR_PAD_LEFT;
                break;
            case "R":
                $pad = STR_PAD_RIGHT;
                break;
            default:
                $pad = STR_PAD_BOTH;
        }
        return str_pad($input, $size, $char, $pad);
    }

    static public function checkTime($datetime) {
        if (!HelperValidate::isDate($datetime))
            return 0;
        $today = self::today();
        $datetime1 = new \DateTime($today);
        $datetime2 = new \DateTime($datetime);
        $interval = $datetime1->diff($datetime2); //Qty in days(+ ou -)
        $days = (int) $interval->days;
        //if($interval->invert)
        //$days = $days - ($days*2);//Convert for negative
        if ($days < 0)
            $days = 0;
        else
            $days += 1;
        return (int) $days;
    }

    static public function today($date_time = false) {
        if ($date_time === true)
            return date('Y-m-d H:i:s');
        else
            return date('Y-m-d');
    }

    static public function timeToSec($time) {
        $hours = Tools::Pad(Trim(substr($time, 0, -6)), 2, 0, 'L');
        $minutes = Tools::Pad(Trim(substr($time, -5, 2)), 2, 0, 'L');
        $seconds = Tools::Pad(Trim(substr($time, -2)), 2, 0, 'L');

        return $hours * 3600 + $minutes * 60 + $seconds;
    }

    static public function secToTime($seconds) {
        $hours = floor($seconds / 3600);
        $minutes = floor($seconds % 3600 / 60);
        $seconds = $seconds % 60;

        return sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
    }

    static public function fileGetContents(
    $url, $use_include_path = false, $stream_context = null, $curl_timeout = 5
    ) {
        if ($stream_context == null && preg_match('/^https?:\/\//', $url))
            $stream_context = @stream_context_create(array('http' => array('timeout' => $curl_timeout)));

        if (in_array(ini_get('allow_url_fopen'), array(
                    'On',
                    'on',
                    '1'
                )) || !preg_match('/^https?:\/\//', $url))
            return @file_get_contents($url, $use_include_path, $stream_context);
        else
        if (function_exists('curl_init')) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
            curl_setopt($curl, CURLOPT_TIMEOUT, $curl_timeout);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

            if ($stream_context != null) {
                $opts = stream_context_get_options($stream_context);
                if (
                        isset($opts['http']['method']) && Tools::strtolower($opts['http']['method']) == 'post'
                ) {
                    curl_setopt($curl, CURLOPT_POST, true);
                    if (isset($opts['http']['content'])) {
                        parse_str($opts['http']['content'], $post_data);
                        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
                    }
                }
            }
            $content = curl_exec($curl);
            curl_close($curl);
            return $content;
        } else
            return false;
    }

    static public function existsURL($url) {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        $response = curl_exec($ch);

        $return = (strlen($response) > 0);

        if ($errno = curl_errno($ch)) {
            $return = false;
        }
        curl_close($ch);

        return $return;
    }

    static public function download($path, $file_name) {

        if (!is_file($path))
            return false;
        $type = '';
        switch (strtolower(substr(strrchr(basename($file_name), "."), 1))) {
            case "pdf":
                $type = "application/pdf";
                break;
            case "exe":
                $type = "application/octet-stream";
                break;
            case "zip":
                $type = "application/zip";
                break;
            case "doc":
                $type = "application/msword";
                break;
            case "xls":
                $type = "application/vnd.ms-excel";
                break;
            case "ppt":
                $type = "application/vnd.ms-powerpoint";
                break;
            case "gif":
                $type = "image/gif";
                break;
            case "png":
                $type = "image/png";
                break;
            case "jpg":
                $type = "image/jpg";
                break;
            case "mp3":
                $type = "audio/mpeg";
                break;
            case "php":
                $type = '';
                break;
            case "htm":
                $type = '';
                break;
            case "html":
                $type = '';
                break;
        }
        header('Content-Description: File Transfer');
        if ($type)
            header('Content-Type: ' . $type);
        header('Content-Disposition: attachment; filename=' . basename($file_name));
        //header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($path));

        ob_clean();
        flush();
        $readfile = @readfile($path);

        return $readfile;
    }

    static public function getValueTagHtmlByNameItem($html, $tag, $name_item) {
        $res = array();
        $dom = new DOMDocument;
        $dom->loadHTML($html);
        foreach ($dom->getElementsByTagName($tag) as $i => $obj)
            $res[] = $dom->getElementsByTagName($tag)->item($i)->attributes->getNamedItem($name_item)->value;

        return $res;
    }

    static public function encrypt($str, $param = true, $q_code = 2) {
        if ($param === true)
            for ($i = 0; $i < $q_code; $i++)
                $str = strrev(base64_encode($str));
        else
            for ($i = 0; $i < $q_code; $i++)
                $str = base64_decode(strrev($str));
        return $str;
    }

    static public function getStringValueByArray(
    $string, $delimiter, $position = 0, $limit = null
    ) {
        if (!$string || !$delimiter || (!is_numeric($position) || $position < 0))
            return '';
        if (!is_null($limit))
            $string = explode($delimiter, $string, $limit);
        else
            $string = explode($delimiter, $string);
        if (!empty($string[$position]))
            return $string[$position];
        return '';
    }

    static public function parseIniString($string, $process_sections = true) {
        if (empty($string))
            return '';
        return parse_ini_string($string, $process_sections);
    }

    static public function jsonEncode($object) {
        if (is_object($object) or is_array($object))
            return json_encode($object, true);
        return $object;
    }

    static public function jsonDecode($str) {
        if (self::isString($str))
            return json_decode($str, true);
        return $str;
    }

    static public function objectToArray($object) {
        if (!is_object($object))
            return $object;
        return json_decode(json_encode($object, true), true);
    }

    static public function arrayToObject($array) {
        if (!is_array($array))
            return $array;
        return json_decode(json_encode($array, false), false);
    }

    static public function count($list) {
        if (is_array($list))
            return count($list);
        return 0;
    }

    static public function generateRandomID($uppercase = true, $letters = true, $numbers = true, $size = 8) {

        $strLowercase = 'abcdefghijklmnopqrstuvwxyz';
        $strUppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $num = '0123456789';

        $return = '';
        $string = '';

        if ($letters) {
            $string .= $strLowercase;
            if ($uppercase)
                $string .= $strUppercase;
        }

        if ($numbers)
            $string .= $num;

        $len = strlen($string);
        for ($n = 1; $n <= $size; $n++) {
            $rand = mt_rand(1, $len);
            $return .= $string[$rand - 1];
        }
        return $return;
    }

    static public function curlGet($url, $params=array(), array $headers = null, $ssl = false, $returnHeader = false) {
        if (!$url) {
            return null;
        }

        $ch = curl_init();
        if (Tools::count($params)) {
            $url = $url . '?' . http_build_query($params);
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        if (Tools::count($headers)) {
            curl_setopt($ch, CURLOPT_HEADER, $returnHeader);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        } else {
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/plain'));
        }
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    /*
      $url = "http://requestb.in/1h1tct81";
      $json = "{\"name\" : \"UserName\", \"age\" : 12 }";
      $ret = curlPost($url, $json, $http_status);
     */

    static public function curlPost($url, $datas, array $header = null, $credencial = false, $ssl = false, $typeMethod = '', $returnHeader = false) {

        $ch = curl_init();
        // user credencial
        if ($credencial) {
            curl_setopt($ch, CURLOPT_USERPWD, "username:passwd");
        }
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC | CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        // post_data


        if (!is_null($header)) {
            curl_setopt($ch, CURLOPT_HEADER, $returnHeader);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        }
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

        if (
                $typeMethod != 'PUT' &&
                $typeMethod != 'DELETE' &&
                $typeMethod != 'PATCH' &&
                $typeMethod != 'COOKIE'
        ) {
            $typeMethod = 'POST';
        }

        if ($typeMethod == 'POST' || $typeMethod == 'PATCH') {
            curl_setopt($ch, CURLOPT_POST, true);
            if (Tools::count($datas)) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($datas));
            } elseif ($datas) {
                curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
            }
        }
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $typeMethod);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $ssl);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $ssl);
        $response = curl_exec($ch);

        $body = null;
        // error
        if (!$response) {
            $body = curl_error($ch);
            // HostNotFound, No route to Host, etc  Network related error
            $http_status = -1;
            return $body;
        } else {
            $body = $response;
        }

        curl_close($ch);
        return $body;
    }

    static public function truncateWord($phrase, $length, $concat = '') {
        return strtok(wordwrap($phrase, $length, "\n"), "\n") . (Tools::strlen($phrase) > $length ? $concat : '');
    }

    static public function truncateString($string, $length, $concat = '') {
        $truncate = substr($string, 0, $length);
        return $truncate . (Tools::strlen($string) > $length ? $concat : '');
    }

    static function calculateByte($size, $accuracy = 2, $unit = false) {
        $units = array('b', 'Kb', 'Mb', 'Gb');
        $output = 0;
        foreach ($units as $n => $u) {
            $div = pow(1024, $n);
            if ($size > $div) {
                $output = number_format($size / $div, $accuracy) . (($unit) ? $u : '');
            }
        }
        return $output;
    }

    static public function d($obj, $die = true) {

        if (is_bool($obj)) {
            if (!$obj) {
                $obj = 'false';
            } else {
                $obj = 'true';
            }
        }
        if (is_null($obj)) {
            $obj = 'null';
        }
        if (is_numeric($obj) && is_nan($obj)) {
            $obj = 'val: (Nan)';
        }

        echo '<pre>';
        print_r($obj);
        echo "</pre>\n";

        if ($die) {
            die('END Debug');
        }
        return $obj;
    }

    static public function p($obj) {
        self::d($obj, false);
    }

}
