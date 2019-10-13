<?php
/**
 * This file contains student controller class
 */
/**
 * Student controller is used to handle all requests for student module
 */
class studentController extends baseController
{

    /**
     * Default constructor used to initialize base model to student model
     */
    function __construct() {

        //setting base model of basecontroller to student
        $this->setmodel("studentModel");
    }
}
?>
