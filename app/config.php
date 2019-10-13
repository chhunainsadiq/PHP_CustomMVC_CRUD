<?php
/**
 * Configuration file having all the paths from root
 * to folders and files
 */
define('ROOT', dirname(__DIR__). DIRECTORY_SEPARATOR);
define('APP', ROOT. 'app'. DIRECTORY_SEPARATOR);
define('PUB', ROOT. 'public'. DIRECTORY_SEPARATOR);
define('CORE', ROOT. 'core'. DIRECTORY_SEPARATOR);
define('CONTROLLER', APP.'controllers'. DIRECTORY_SEPARATOR);
define('MODEL', APP.'models'. DIRECTORY_SEPARATOR);
define('VIEW', APP.'views'. DIRECTORY_SEPARATOR);
define('HOME', VIEW.'home'. DIRECTORY_SEPARATOR);
define('ERROR', VIEW.'error'. DIRECTORY_SEPARATOR);
define('STUDENT', VIEW.'student'. DIRECTORY_SEPARATOR);
define('TEACHER', VIEW.'teacher'. DIRECTORY_SEPARATOR);
define('COURSE', VIEW.'course'. DIRECTORY_SEPARATOR);
define('GENERIC', VIEW.'generic'. DIRECTORY_SEPARATOR);
define('LAYOUTS', VIEW.'layouts'. DIRECTORY_SEPARATOR);
define("defaultController", "home");
define("defaultMethod", "index");

define('LIBS', CORE. 'libs'. DIRECTORY_SEPARATOR);
define('COREMODEL', CORE.'models'. DIRECTORY_SEPARATOR);
define('CORECONTROLLERS', CORE.'controllers'. DIRECTORY_SEPARATOR);
define('COREVIEWS', CORE.'views'. DIRECTORY_SEPARATOR);
define('DATABASE', COREMODEL.'database'. DIRECTORY_SEPARATOR);
define('PDO', DATABASE.'drivers/pdo'. DIRECTORY_SEPARATOR);

define('JS', PUB.'js'. DIRECTORY_SEPARATOR);

?>
