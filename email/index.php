<?php
/**
* Framework CASIPE
*
* @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
* @link http://www.casipe.com.br/
* @copyright 2013 - 2018 CASIPE - Desenvolvedor Web
* @license http://www.casipe.com.br/
*/

			    	
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
	
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
	
header("Location: ../");
exit;