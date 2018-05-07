<?php
if(!isset($_SESSION)) {
	session_start();
}

// site domain name with http
defined("SITE_URL")
	|| define("SITE_URL", "http://".$_SERVER['SERVER_NAME']);
	
// directory separator
defined("DS")
	|| define("DS", DIRECTORY_SEPARATOR);

// root path
defined("ROOT_PATH")
	|| define("ROOT_PATH", realpath(dirname(__FILE__) . DS."..".DS));
	
// classes folder
defined("CLASSES_DIR")
	|| define("CLASSES_DIR", "classes");

// pages directory
defined("PAGES_DIR")
	|| define("PAGES_DIR", "pages");

// modules folder
defined("MOD_DIR")
	|| define("MOD_DIR", "mod");
	
// inc folder
defined("INC_DIR")
	|| define("INC_DIR", "inc");
	
// templates folder
defined("TEMPLATE_DIR")
	|| define("TEMPLATE_DIR", "template");
	
// emails path
defined("EMAILS_PATH")
	|| define("EMAILS_PATH", ROOT_PATH.DS."emails");
	
// catalogue images path
defined("CATALOGUE_PATH")
	|| define("CATALOGUE_PATH", ROOT_PATH.DS."media".DS."catalogue");
defined('DATABASE_NAME') || define('DATABASE_NAME',"sovoce01");
defined('DATABASE_HOST') || define('DATABASE_HOST',"localhost");
defined('DATABASE_USER') || define('DATABASE_USER',"root");
defined('DATABASE_PASS') || define('DATABASE_PASS',"");

// add all above directories to the include path
set_include_path(implode(PATH_SEPARATOR, array(
	realpath(ROOT_PATH.DS.CLASSES_DIR),
	realpath(ROOT_PATH.DS.PAGES_DIR),
	realpath(ROOT_PATH.DS.MOD_DIR),
	realpath(ROOT_PATH.DS.INC_DIR),
	realpath(ROOT_PATH.DS.TEMPLATE_DIR),
	get_include_path()
)));