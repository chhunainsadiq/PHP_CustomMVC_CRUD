<?php
/**
 * This file contains teacher controller class
 */
/**
 * Teacher controller is used to handle all requests for teacher module
 */
class teacherController extends baseController
{
    /**
     * Default constructor used to initialize basemodel to teacher
     */
    function __construct() {
        //setting base model of basecontroller to teacher
        $this->setmodel("teacherModel");
    }
}
?>
