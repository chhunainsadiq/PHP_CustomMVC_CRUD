<?php
/**
 * Class coursecontroller it extends the baseController
 * It handles all the requests related of the course
 */

class courseController extends baseController
{
    /**
     * Default constructor used to initialize base model to course model
     */
    function __construct() {
        //setting base model of basecontroller to course
        $this->setmodel("courseModel");
    }
}
?>
