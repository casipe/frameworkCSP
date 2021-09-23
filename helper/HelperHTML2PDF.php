<?php

/**
 *
 * Class HelperHTML2PDF
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */

namespace core\helper;
use Dompdf\Dompdf;

require_once _DOMPDF_DIR_ . '/lib/html5lib/Parser.php';
require_once _DOMPDF_DIR_ . '/autoload.inc.php';

//generate some PDFs!
/*
  $dompdf = new DOMPDF();  //if you use namespaces you may use new \DOMPDF()
  $dompdf->loadHtml($html);
  $dompdf->render();
  $dompdf->stream("sample.pdf", array("Attachment"=>0));
 */


Class HelperHTML2PDF extends DOMPDF {

    public $fileName = '';

    public function __construct($options = null) {
        parent::__construct($options);
    }

    public function fileSave() {
        if ($this->fileName)
            file_put_contents($this->fileName, $this->output());
    }

    public function fileOpen() {
        if ($this->fileName)
            $this->stream($this->fileName, array("Attachment" => 0));
    }

    public function fileDownload() {
        if ($this->fileName)
            $this->stream($this->fileName);
    }

    public function fileOutput() {
        if ($this->fileName)
            return $this->output();
    }

}
