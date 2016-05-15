<?php

$autoload_path = dirname(__FILE__) . '/../vendor/autoload.php';
if (!is_readable($autoload_path)) {
	die("set composer autoload path in " . __FILE__);
}
require $autoload_path;
