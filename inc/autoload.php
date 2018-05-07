<?php
/**
 * Author:  abon duttaroy<abon@sbcreationgroup.com>
 * Created: 5 May, 2018
 */
require_once('config.php');

function __autoload($class_name) {
	$class = explode("_", $class_name);
	$path = implode("/", $class).".php";
	require_once($path);
}