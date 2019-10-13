<?php
/**
 * Created by PhpStorm.
 * User: hunain.sadiq
 * Date: 9/30/18
 * Time: 4:03 PM
 */
class modelFactory
{
    /**
     * modelFactory constructor.
     */
    function __construct()
    {
    }

    /**
     * This will check if the class exists and if it exists then after making object of that class returns it
     * @param $objName  name of model of which we have to made  object
     */
    public static function getModel($objName)
    {
        if(class_exists($objName)){

            if(is_subclass_of($objName, 'baseModel'))
            {
                return new $objName();
            }
            else
                throw new Exception('Sorry Requested Model "'.$objName.'" is not Valid.');
        }
        else
            throw new Exception('Sorry Requested Model "'.$objName.'" does not exists.');
    }
}


?>
