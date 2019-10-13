<?php
/**
 * This file contains Auto loader function
 */
/**
 * This file will autoload a class by checking its existence
 * from configuration file
 */
require_once dirname(__DIR__).'/../app/config.php';
spl_autoload_register(function($class)
{

    if(file_exists(CONTROLLER.$class.'.php')) {
        include CONTROLLER.$class.'.php';
    }
    elseif(file_exists(VIEW.$class.'.php')) {
        include VIEW.$class.'.php';
    }
    elseif(file_exists(COURSE.$class.'.php')) {
        include COURSE.$class.'.php';
    }
    elseif(file_exists(STUDENT.$class.'.php')) {
        include STUDENT.$class.'.php';
    }
    elseif(file_exists(TEACHER.$class.'.php')) {
        include TEACHER.$class.'.php';
    }
    elseif(file_exists(GENERIC.$class.'.php')) {
        include GENERIC.$class.'.php';
    }
    elseif(file_exists(HOME.$class.'.php')) {
        include HOME.$class.'.php';
    }
    elseif(file_exists(ERROR.$class.'.php')) {
        include ERROR.$class.'.php';
    }
    elseif(file_exists(LAYOUTS.$class.'.php')) {
        include LAYOUTS.$class.'.php';
    }
    elseif(file_exists(MODEL.$class.'.php')) {
        include MODEL.$class.'.php';
    }
    elseif(file_exists(COREMODEL.$class.'.php')) {
        include COREMODEL.$class.'.php';
    }
    elseif(file_exists(CORECONTROLLERS.$class.'.php')) {
        include CORECONTROLLERS.$class.'.php';
    }
    elseif(file_exists(COREVIEWS.$class.'.php')) {
        include COREVIEWS.$class.'.php';
    }
    elseif(file_exists(DATABASE.$class.'.php')) {
        include DATABASE.$class.'.php';
    }
    elseif(file_exists(PDO.$class.'.php')) {
        include PDO.$class.'.php';
    }
    elseif(file_exists(JS.$class.'.php')) {
        include JS.$class.'.php';
    }
    elseif(file_exists(LIBS.$class.'.php')) {
        include LIBS.$class.'.php';
    }
    else {
        echo "file does not exists";
    }
});
?>
