<?php
// - ::::: Documenta��o :::: -



/**
* Criar link
* Classe:Html::Html
* M�todo: link( $url=null, $title=null, Array $html_options=null);
* @param String $url URL do link
* @param String $title Titulo do link
* @param Array $html_options Op��es do link Ex.: 'class'=>'link', 'style'=>'cor:red'
* @return String
*/
$this->html = new Html();

Html::link("{Tools::absoluteURL()}artigos/", $title, array('target'=>"_parent"));
						
