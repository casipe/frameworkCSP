<?php

/**
 *
 * Class HelperPDF
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core\helper;

require_once(_FPDF_DIR_ . '/fpdf.php');

//PDF é uma classe geral do sistema
Class HelperPDF extends FPDF {

    private $isWriteHTML = false;
    //variables of html parser
    protected $B;
    protected $I;
    protected $U;
    protected $HREF;
    protected $fontList;
    protected $issetfont;
    protected $issetcolor;

    public function __construct($orientation = 'P', $unit = 'mm', $size = 'A4') {

        parent::__construct($orientation, $unit, $size);

        //Initialization
        $this->B = 0;
        $this->I = 0;
        $this->U = 0;
        $this->HREF = '';
        $this->fontlist = array('arial', 'times', 'courier', 'helvetica', 'symbol');
        $this->issetfont = false;
        $this->issetcolor = false;
    }

    function Cell($w, $h = 0, $text = "", $border = 0, $ln = 0, $align = '', $fill = false, $link = '') {
        if (!empty($text)) {
            if (mb_detect_encoding($text, 'UTF-8', false)) {
                $text = utf8_decode($text);
            }
        }
        parent::Cell($w, $h, $text, $border, $ln, $align, $fill, $link);
    }

    public function WriteHTML($html) {
        $this->isWriteHTML = true;

        //HTML parser
        $html = strip_tags($html, "<b><u><i><a><img><p><br><strong><em><font><tr><blockquote>"); //supprime tous les tags sauf ceux reconnus
        $html = str_replace("\n", ' ', $html); //remplace retour à la ligne par un espace
        $a = preg_split('/<(.*)>/U', $html, -1, PREG_SPLIT_DELIM_CAPTURE); //éclate la chaîne avec les balises
        foreach ($a as $i => $e) {
            if ($i % 2 == 0) {
                //Text
                if ($this->HREF)
                    $this->PutLinkHTML($this->HREF, $e);
                else
                    $this->Write(5, stripslashes($this->txtentities($e)));
            }
            else {
                //Tag
                if ($e[0] == '/')
                    $this->CloseTagHTML(strtoupper(substr($e, 1)));
                else {
                    //Extract attributes
                    $a2 = explode(' ', $e);
                    $tag = strtoupper(array_shift($a2));
                    $attr = array();
                    foreach ($a2 as $v) {
                        if (preg_match('/([^=]*)=["\']?([^"\']*)/', $v, $a3))
                            $attr[strtoupper($a3[1])] = $a3[2];
                    }
                    $this->OpenTagHTML($tag, $attr);
                }
            }
        }
    }

    private function OpenTagHTML($tag, $attr) {
        if (!$this->isWriteHTML)
            return;

        //Opening tag
        switch (strtoupper($tag)) {
            case 'STRONG':
                $this->SetStyleHTML('B', true);
                break;
            case 'EM':
                $this->SetStyleHTML('I', true);
                break;
            case 'B':
            case 'I':
            case 'U':
                $this->SetStyleHTML($tag, true);
                break;
            case 'A':
                $this->HREF = $attr['HREF'];
                break;
            case 'IMG':
                if (isset($attr['SRC']) && (isset($attr['WIDTH']) || isset($attr['HEIGHT']))) {
                    if (!isset($attr['WIDTH']))
                        $attr['WIDTH'] = 0;
                    if (!isset($attr['HEIGHT']))
                        $attr['HEIGHT'] = 0;
                    $this->Image($attr['SRC'], $this->GetX(), $this->GetY(), $this->px2mm($attr['WIDTH']), $this->px2mm($attr['HEIGHT']));
                }
                break;
            case 'TR':
            case 'BLOCKQUOTE':
            case 'BR':
                $this->Ln(5);
                break;
            case 'P':
            case 'DIV':
                $this->Ln(10);
                break;
            case 'FONT':
                if (isset($attr['COLOR']) && $attr['COLOR'] != '') {
                    $coul = $this->hex2dec($attr['COLOR']);
                    $this->SetTextColor($coul['R'], $coul['V'], $coul['B']);
                    $this->issetcolor = true;
                }
                if (isset($attr['FACE']) && in_array(strtolower($attr['FACE']), $this->fontlist)) {
                    $this->SetFont(strtolower($attr['FACE']));
                    $this->issetfont = true;
                }
                break;
        }
    }

    private function CloseTagHTML($tag) {

        if (!$this->isWriteHTML)
            return;
        $tag = strtoupper($tag);

        //Closing tag
        if ($tag == 'STRONG')
            $tag = 'B';
        if ($tag == 'EM')
            $tag = 'I';
        if ($tag == 'B' || $tag == 'I' || $tag == 'U')
            $this->SetStyleHTML($tag, false);
        if ($tag == 'A')
            $this->HREF = '';
        if ($tag == 'FONT') {
            if ($this->issetcolor == true) {
                $this->SetTextColor(0);
            }
            if ($this->issetfont) {
                $this->SetFont('arial');
                $this->issetfont = false;
            }
        }
    }

    private function SetStyleHTML($tag, $enable) {
        if (!$this->isWriteHTML)
            return;

        //Modify style and select corresponding font
        $this->$tag += ($enable ? 1 : -1);
        $style = '';
        foreach (array('B', 'I', 'U') as $s) {
            if ($this->$s > 0)
                $style .= $s;
        }
        $this->SetFont('', $style);
    }

    private function PutLinkHTML($URL, $txt) {
        //Put a hyperlink
        $this->SetTextColor(0, 0, 255);
        $this->SetStyleHTML('U', true);
        $this->Write(5, $txt, $URL);
        $this->SetStyleHTML('U', false);
        $this->SetTextColor(0);
    }

    //function hex2dec
    //returns an associative array (keys: R,G,B) from
    //a hex html code (e.g. #3FE5AA)
    private function hex2dec($couleur = "#000000") {
        if (!$this->isWriteHTML)
            return;

        $R = substr($couleur, 1, 2);
        $rouge = hexdec($R);
        $V = substr($couleur, 3, 2);
        $vert = hexdec($V);
        $B = substr($couleur, 5, 2);
        $bleu = hexdec($B);
        $tbl_couleur = array();
        $tbl_couleur['R'] = $rouge;
        $tbl_couleur['V'] = $vert;
        $tbl_couleur['B'] = $bleu;

        return $tbl_couleur;
    }

    //conversion pixel -> millimeter at 72 dpi
    private function px2mm($px) {
        if (!$this->isWriteHTML)
            return;

        return $px * 25.4 / 72;
    }

    private function txtentities($html) {

        if (!$this->isWriteHTML)
            return;

        $trans = get_html_translation_table(HTML_ENTITIES);
        $trans = array_flip($trans);

        return strtr($html, $trans);
    }

}
