<?php
/**
 * This file contains bootstrap class
 */

/**
 * The medium class used to call run method of controller
 *
 * @author Hunain Sadiq
 */
class bootStrap
{
    /**
     * A method for running mvc application
     */
    public static function runApplication() {
        /**
         * Getting request singleton object
         */
        $request=request::getInstance();
        /**
         * calling function for initializing Controller, Action method and parameters
         */
        $request->prepareURL();
        $controller= controllerFactory::getController($request->get_controller());
        //$request->set_controller($controller)
        /**
         * calling run method to start MVC application
         */
        $controller->run();
    }
}
