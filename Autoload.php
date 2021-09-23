<?php

/**
 * Autoload.php
 *
 * Framework CASIPE
 *
 * @author CARLIVAN PEREIRA <carlivanpereira@gmail.com>
 * @link http://www.casipe.com.br/
 * @copyright 2013 - 2017 CASIPE - Desenvolvedor Web
 * @license http://www.casipe.com.br/
 */
spl_autoload_register(function ($class_name) {
    $className = str_replace("\\", "/",  $class_name);
    $className = str_replace('core', '', _ROOT_DIR_) . $className . '.php';
	
    if (file_exists($className)) {
        require_once $className;
    }
    else {
        $className = _ROOT_.'/classes/lib/'; 
        $className .= str_replace('\\','/', $class_name).'.php';
        if (file_exists($className)){
    	    require_once $className;
        }
    	else {
    	   
    	   //echo '<pre>';
    	   //var_dump($className); 
    	}
    }
    
});
