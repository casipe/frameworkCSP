<?php

/**
 * Class HelperHtml
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core\helper;

use core\Tools;
use core\helper\HelperValidate;

class HelperHtml {

    protected $params_app;

    /**
     * Método codificador de caracteres especiais no html
     * @param $str Ex.: &lt; codifica para "<"
     * @return String
     */
    public static function htmlEncode($str) {
        return htmlspecialchars($str, ENT_QUOTES, System::charset());
    }

    /**
     * Método decodificador de caracteres especiais no html
     * @param $str Ex.: &amp; decodifica para "&"
     * @return String
     */
    public static function htmlDecode($str) {
        return htmlspecialchars_decode($str, ENT_QUOTES);
    }

    /**
     * Método que atribui o indice ao elemento do array
     *
     * Ex.: ind = "elems"
     * @return String
     */
    public static function renderAttrs(Array $att) {
        $value = null;
        if (!is_array($att))
            System::exception($msg = 'A string $att não é um vetor(array)', $code = null);


        foreach ($att as $key => $val)
            $value .= ' ' . $key . '="' . $val . '"';
        return $value;
    }

    /**
     * Método gerador de tags
     *
     * @param String $tag O tipe da tag. Ex.: title, a, img, script, link, meta, input
     * @param Array $options Opções da tag img. Ex.: array('class'=>'img', 'width'=>'100px')
     * @param String/Boolean $content Se for String, será inserido dentro da tag. Ex.: <a href=''> $content </a>
     * @param Boolean $close_tag Opção para fechar ou não a tag. Ex.: <script></script> ou <input />
     * @return String
     */
    public static function tag($tag, $options = array(), $content = true, $open_tag = true, $close_tag = true) {
        $html = null;
        if (!is_array($options)) {
            System::exception($msg = 'A string $options não é um vetor(array)[' . $tag . ']', $code = null);
        }
        if ($open_tag === true) {
            $html .= '<' . $tag . self::renderAttrs($options);
        }

        if ($content === true) {
            return $close_tag ? $html . '/>' : $html . '>';
        }
        if ($open_tag == false) {
            return '</' . $tag . '>';
        }
        return $close_tag ? $html . '>' . $content . '</' . $tag . '>' : $html . '>' . $content;
    }

    /**
     * Método que gera o título da página
     *
     * @param $title, $content_title = null, $separator
     * @param $content_title
     * @param $separator
     * @return String
     */
    public static function pageTitle($title, $content_title = null, $separator = null) {
        if ($content_title && is_null($separator))
            $separator = ' - ';
        if (!is_null($content_title) || $content_title != " ")
            $cont_title = $separator . $content_title;
        $content = $title . $separator . $content_title;
        return self::tag($tag = "title", $options = array(), $content, $open_tag = true, $close_tag = true);
    }

    /**
     * Método gerador de tags "css"
     *
     * Ex.: $options = array(
     *         'path/url'=>array('css_1.css', 'css_2.css'),
     *         'path_2/url_2'=>array('css_1.css', 'css_2.css'),
     *     ),
     *
     * @param Array $options Opções da tag css
     * @return String
     */
    public static function stylesheet(Array $options) {
        $css = '';
        if (Tools::count($options)) {
            $css = "\n\t\t<!-- BEGIN CSS System -->";
            foreach ($options as $k => $href) {
                $params = array(
                    'rel' => 'stylesheet',
                    'type' => 'text/css',
                    'href' => $href,
                );
                $css .= "\n\t\t\t" . self::tag($tag = "link", $params, $content = false, $open_tag = true, $close_tag = true);
                $css .= "\t\t\t";
            }
        }
        if ($css) {
            $css .= "\n\t\t<!-- END CSS System -->\t\t\n";
            return $css;
        }
    }
    /**
     * Método gerador de tags "javascript"
     *
     * Ex 1 $options = array('javascript_1.js', 'javascript_2.js')
     * Ex 2 $options = array('javascript_1.js', array('javascript_2.js','IE')) //Com condição
     *
     * @param Array $options
     * @return String
     */
    public static function javascript(Array $options) {
        $js = '';
        if (Tools::count($options)) {
            $js = "\n\t\t<!-- BEGIN JavaScript System -->";
            foreach ($options as $k => $src) {
                $condition = '';
                if (is_array($src)) {
                    if (Tools::count($src) > 1) {
                        $condition = $src[1];
                        $src = $src[0];
                    } else {
                        continue;
                    }
                }
                $params = array(
                    'type' => 'text/javascript',
                    'src' => $src,
                );

                $jsTag = "\n\t\t\t" . self::tag($tag = "script", $params, $content = false, $open_tag = true, $close_tag = true);
                if ($condition) {
                    $js .= "\n\t\t\t<!--[if $condition]>";
                    $js .= "\t\t" . $jsTag;
                    $js .= "\n\t\t\t<![endif]-->";
                } else {
                    $js .= $jsTag;
                }
                $js .= "\t\t\t";
            }
        }
        if ($js) {
            $js .= "\n\t\t<!-- END JavaScript System -->\t\t\n";
            return $js;
        }        
    }

    /**
     * Método gerador de tags "javascript"
     *
     * Ex.: $options = array(
     *         'path/url'=>array('javascript_1.js', 'javascript_2.js'),
     *         'path_2/url_2'=>array('javascript_1.js', 'javascript_2.js'),
     *     ),
     *
     * @param Array $options Opções da tag javascript
     * @return String
     */
    public static function cdata($options = null, $only_options = false) {

        $js = '';
        $js_begin = '';
        $js_end = '';

        $meta_config = array();
        if (!$only_options) {
            $meta_config = isset($tags['javascript']) ? $tags['javascript'] : null;
        }

        $count = Tools::count($meta_config);
        if (is_array($options))
            $count += Tools::count($options);

        if ((int) $count > 0) {
            if ($options !== null)
                $meta_config = array_merge_recursive($meta_config, $options);

            $js_begin = "\n\t\t
                
                
                <script type=\"text/javascript\">
                /*<![CDATA[*/
                
                \n\t\t";
            foreach ($meta_config as $k => $v) {
                foreach ($v as $key => $file) {
                    $src = $k;
                    if (!HelperValidate::isUrl($k))
                        $src = Tools::url(true) . _BASE_TEMPLATE_ . $k;
                    if (!file_exists(str_replace('/', '\\', _PATH_TEMPLATE_ . $k . '/' . $file)))
                        return;
                    $params = array(
                        'type' => 'text/javascript',
                        'src' => $src . '/' . $file,
                    );
                    $js .= self::tag($tag = "script", $params, $content = false, $open_tag = true, $close_tag = true);
                    $js .= "\n\t\t";
                }
            }
            $js_end = "\n<!-- /*]]>*/ -->\n\t\t";
        }
        return (!empty($js)) ? $js_begin . $js . $js_end : '';
    }

    /**
     * Método gerador de tags link("rel")
     *
     * Ex.: $options = array('Canonical' => array(    array(
     *                                             'rel'=>'canonical',
     *                                             'href'=>'/compras'
     *                                         ),
     *                                 ),
     *             );
     *
     * 'Canonical' = <!-- Canonical -->
     *
     * @param Array $options Opções do link
     * @return String
     */
    public static function tagsLinkRel($tags, $options = array(), $only_options = false) {
        $meta_config = array();
        if (!$only_options) {
            $meta_config = isset($tags['link_rel']) ? $tags['link_rel'] : null;
        }

        $rel = null;
        $arr = array();
        $count = Tools::count($meta_config);
        if (is_array($options))
            $count += Tools::count($options);

        array_push($arr, $meta_config, $options);

        if ((int) $count > 0) {
            foreach ($arr as $k) {
                foreach ($k as $comment => $val) {
                    $comm_begin = "\n\t\t";
                    $comm_end = "";
                    if ($comment != "null") {
                        $comm_begin = "\n\t\t<!-- META BEGIN " . $comment . " -->\n\t\t";
                        $comm_end = "\n<!-- META END " . $comment . " -->\n\t\t";
                    }
                    $rel .= $comm_begin;
                    foreach ($val as $key => $options) {
                        if (!HelperValidate::isUrl($options['href']))
                            $options['href'] = Tools::absoluteURL() . $options['href'];
                        $rel .= self::tag($tag = "link", $options, $content = true, $open_tag = true, $close_tag = true) . "\n\t\t";
                    }
                    $rel .= $comm_end;
                }
            }
        }
        return (!empty($rel)) ? $rel : '';
    }

    /**
     * Método gerador de links
     *
     * @param String $url URL do link
     * @param String $title Titulo do link
     * @param Array $options Opções do link. Ex.: array('class'=>'link', 'style'=>'cor:red')
     * @param Boolean $replace_trim se TRUE, substitui os espaços da URL por um hífen
     * @return String ou Boolean false
     */
    public static function link($url = null, $title = null, Array $options = null) {
        if ($url != null) {
            $options = array('href' => strtolower($url), 'rel' => 'external');
            if ($options !== null)
                $options = array_merge_recursive($options, $options); //Funde os elementos dos arrays

            return self::tag($tag = "a", $options, $title, $open_tag = true, $close_tag = true);
        } else
            return false;
    }

    /**
     * Método retira e substitui os espaços em branco das URL's
     *
     * @param String $url URL do link
     * @return String
     */
    public static function replaceUrl($url = null) {
        if ($url != null) {
            $url = str_replace(array(' ', '  ', '   ', '    ', '     ', '      '), "-", $url);
            $url = str_replace(array('--', '---', '----', '-----', '/'), "-", $url);
        }
        return Formatter::removeCharSpecialString($url);
    }

    /**
     * Método gerador das tags de imagem
     *
     * @param String $src Diretorio do arquivo
     * @param Array $options Opções da tag img. Ex.: array('class'=>'img', 'style'=>'border:0px')
     * @return String
     */
    public static function img($src = null, Array $options = null) {
        $options = array('src' => $src);
        if ($options !== null){
            $options = array_merge_recursive($options, $options); //Funde os elementos dos arrays
        }
        return self::tag($tag = "img", $options, $content = true, $open_tag = true, $close_tag = true);
    }

    /**
     * Método gerador dos metatags
     *
     * Ex.: $options = array('App' => array(
     *                             array('http-equiv'=>'Content-Type', 'content'=>'text/html; charset=utf-8'),
     *                         ),
     *                 );
     * 'App' = <!-- App -->
     *
     * @param Array $options Opções da tag img.
     * @return String
     */
    public static function metatags($tags, $options = array(), $only_options = false) {
        $meta_config = array();
        if (!$only_options) {
            $meta_config = isset($tags['metatag']) ? $tags['metatag'] : null;
        }

        $meta = null;
        $arr = array();
        $count = Tools::count($meta_config);
        if (is_array($options)){
            $count += Tools::count($options);
        }
        array_push($arr, $meta_config, $options);

        if ((int) $count > 0) {
            foreach ($arr as $k) {
                foreach ($k as $comment => $val) {
                    $comm_begin = "\n\t\t";
                    $comm_end = "";
                    if ($comment != "null" && !HelperValidate::isIntval($comment)) {
                        $comm_begin = "\n\t\t<!-- META BEGIN " . $comment . " -->\n\t\t";
                        $comm_end = "<!-- META END " . $comment . " -->\n\t\t";
                    }
                    $meta .= $comm_begin;
                    foreach ($val as $key => $options) {
                        $meta .= self::tag($tag = "meta", $options, $content = true, $open_tag = true, $close_tag = true);
                        if (!HelperValidate::isIntval($comment))
                            $meta .= "\n\t\t";
                    }
                    $meta .= $comm_end;
                }
            }
        }
        return (!empty($meta)) ? $meta : '';
    }

    /**
     * Método gerador do favicon
     * @return String
     */
    public static function favicon($favicon) {
        if (!$favicon)
            return;
        return "<!-- Favicon -->\n\t\t<link rel=\"shortcut icon\" type=\"image/vnd.microsoft.icon\" href=\"" . Tools::baseURL() . $favicon . "\"/>\n\t\t";
    }

    /**
     * Método insere quebra de linha e tabulações nos arquivos com tags html
     * @param int $num
     * @return String
     */
    public static function tab($num = 1, $ln = true) {
        $i = 1;
        $tab = null;

        if ($ln)
            $tab = "\n";
        for ($i; $i <= (int) $num; $i++)
            $tab .= "\t";

        return $tab;
    }

}
