<?php
/**
 * This file contains request class
 */

/**
 * A class having the information about controller, method and parameters
 * @author Hunain Sadiq
 *
 */
class request
{
    /**
     *controller object
     * @var object
     */
    protected $controller = '';
    /**
     *action method of respective controller
     * @var string
     */
    protected $action  = null;
    /**
     *params are used to store request parameters
     * @var array[]
     */
    protected $params =[];
    /**
     *A static request object for implementing singleton pattern
     * @var object
     */
    private static $reqObj=null;
    /**
     * Getter for controller
     * @return object
     */
    function get_controller() {
        return $this->controller;
    }
    /**
     * getter for action method
     * @return string
     */
    function get_action() {
        return $this->action;
    }
    /**
     * Getter for parameters of request
     * @return array
     */
    function get_params() {
        return $this->params;
    }

    /**
     * A method to check is request object has been created or not
     * if not created then create and returns new object otherwise
     * returns old object
     * @return object object for request class
     */
    public static function getInstance() {
        //if request object is null then create new object of request
        if (self::$reqObj === null) {

            return self::$reqObj = new request();
        }
        //returning old object that is being used for application
        else {

            return self::$reqObj;
        }
    }

    /**
     * This function will initialize the controller, action method and params according to URI
     */
    public function prepareURL() {
        //getting url
        $request= trim($_SERVER['REQUEST_URI'], '/');// removes first forwardslash
        $request= preg_replace('#/+#','/',$request); //removes unnecessary forwardslashes from the url
        if(!empty($request)) {
            /**
             * making an array of request to separate controller, action method and params
             */
            $url= explode('/', $request);
            //Initializing the controller
            $this->controller= $url[2];

            $this->action=$url[3];
            //for getting parameters we need to unset controller and action part of url

            if(isset($url[4])) {
                $this->params['ID'] = $url[4];//Getting ID from GET method if any
            }
            //If request is post mainly add a record or update a record
            if($_SERVER['REQUEST_METHOD'] == 'POST') {

                foreach ($_POST as $key => $item) //GETTING FORM DATA PARAMETERS ARRAY
                {
                    $this->params[$key] = $item;//making array of params
                }
            }
        }
    }
}
?>
