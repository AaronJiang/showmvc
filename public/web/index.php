<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('SITE_PATH',realpath(dirname(dirname(dirname(__FILE__)))).'/');
define('CORE_PATH',SITE_PATH.'core'.'/');
define('APP_NAME', 'web');
define('APP_PATH', SITE_PATH.'apps'.'/'.APP_NAME.'/');

/*Require necessary files.*/
require_once(CORE_PATH.'request.php');
require_once(CORE_PATH.'router.php');
require_once(CORE_PATH.'baseController.php');
require_once(CORE_PATH.'baseModel.php');
require_once(CORE_PATH.'load.php');
require_once(CORE_PATH.'registry.php');

Router::route(new Request);
