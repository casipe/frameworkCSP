<?php 
use core\Tools;
use core\Context;
use core\Translate;
use classes\ContextApp;

require_once(_SMARTY_DIR_.'/Smarty.class.php');
global $smarty;

$smarty = new Smarty();
$smarty->setCompileDir(_CACHE_DIR_.'/smarty/compile');
$smarty->setCacheDir(_CACHE_DIR_.'/smarty/cache');
//$smarty->use_sub_dirs = true;
$smarty->setConfigDir(_SMARTY_DIR_.'/configs');
$smarty->caching = false;
$smarty->force_compile = (_SMARTY_FORCE_COMPILE_) ? true : false;
$smarty->compile_check = (_SMARTY_CHECK_COMPILE_) ? true : false;

smartyRegisterFunction($smarty, 'function', 'd', 'smartyDieObject'); // Debug only
smartyRegisterFunction($smarty, 'function', 'p', 'smartyShowObject'); // Debug only

function smartyDieObject($params, &$smarty)
{
	return Tools::d($params['var']);
}

function smartyShowObject($params, &$smarty)
{	
	return Tools::p($params['var']);
}

function smartyRegisterFunction($smarty, $type, $function, $params, $is_lazy = true)
{
	if (!in_array($type, array('function', 'hook')))
		return false;
	// is better if the function is not called on every page
	if ($is_lazy)
	{
		$register = SmartyRegister::getInstance();
		$register->register($params);

		if (is_array($params))
			$params = $params[1];
		// SmartyRegister allows to only load external Class when they are needed
		$smarty->registerPlugin($type, $function, array($register, $params));
	}
	else
		$smarty->registerPlugin($type, $function, $params);
}

/**
 * Used to delay loading of external classes with smarty->register_plugin
 */
Class SmartyRegister
{
	protected $registry = array();
	protected static $instance;

	/**
	 * Register a function or method to be dynamically called later
	 * @param string|array $params function name or array(object name, method name)
	 */
	public function register($params)
	{
		if (is_array($params))
			$this->registry[$params[1]] = $params;
		else
			$this->registry[$params] = $params;
	}

	/**
	 * Dynamically call static function or method
	 *
	 * @param string $name function name
	 * @param mixed $arguments function argument
	 * @return mixed function return
	 */
	public function __call($name, $arguments)
	{
		$item = $this->registry[$name];
		// case 1: call to static method - case 2 : call to static function
		if (is_array($item[1]))
			return call_user_func_array($item[1].'::'.$item[0], array($arguments[0], &$arguments[1]));
		else
		{
			$args = array();
			
			foreach($arguments as $a => $argument)
				if($a == 0)
					$args[] = $arguments[0]; 
				else
					$args[] = &$arguments[$a]; 
			
			return call_user_func_array($item, $args);
		}
	}

	public static function getInstance()
	{
		if (!self::$instance)
			self::$instance = new SmartyRegister();
		return self::$instance;
	}
}
