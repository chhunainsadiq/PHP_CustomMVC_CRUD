<?php
/**
 * This file contains controller factory
 */
/**
 * Controller factory used to construct object for different controllers
 */
class controllerFactory
{
    /**
     * static method to construct object for controller
     * @param string $controllerName controller name
     * @return object controller object
     */
    public static function getController($controllerName) {

        if(isset($controllerName))
        {
            try {
                controllerFactory::isFileExist(CONTROLLER.$controllerName.'Controller'.'.php');
                $controllerName=$controllerName.'Controller';
                echo 'in try block';
                return new $controllerName;
            } catch(Exception $e) {
                echo 'still commming in catch';
                echo $e;
                return new errorController;
            }
        }
        else {
            $controllerName=defaultController.'Controller';
            return new $controllerName;
        }
    }
    /**
     * Checks that file exists or not
     * @param string $filename
     * @throws Exception
     */
    private static function isFileExist($filename) {
        if (!file_exists($filename)) {
            throw new Exception("file was not found");
        }
    }
}
?>
