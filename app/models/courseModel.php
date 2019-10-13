<?php
/**
 * This file contains course model
 */
/**
 * Model for course extends basemodel and implements model interface
 *@author Hunain.sadiq
 */
class courseModel extends baseModel
{
    /**
     *course ID
     * @var int
     */
    private $ID=0;
    /**
     *course name
     * @var string
     */
    private $cName=null;
    /**
     *course code
     * @var int
     */
    private $cCode=0;
    /**
     *database table name for course class
     * @var string
     */
    public $tablename="course";
    /**
     *course db_fields
     * @var float
     */
    private $db_fields=["ID","cName","cCode"];
    /**
     *primary key for course table
     * @var string
     */
    public $primarykey=['ID'];
    /**
     * Default constructor calls base model constructor
     */
    function __construct() {
        parent::__construct();
    }
    /**
     * Getter for course ID
     *
     *@return int course ID
     */
    function get_CID() {
        return $this->ID;
    }
    /**
     * Getter for course name
     *
     * @return string course name
     */
    function get_cName() {
        return $this->cName;
    }
    /**
     * Getter for course code
     *
     *@return int course code
     */
    function get_cCode() {
        return $this->cCode;
    }
    /**
     * Setter for course id
     * @param int $ID course id
     */
    function set_CID($ID) {
        $this->ID = $ID;
    }
    /**
     * Setter for course name
     * @param string $cName course name
     */
    function set_cName($cName) {
        $this->cName = $cName;
    }
    /**
     * Setter for course code
     * @param int $cCode course code
     */
    function set_cCode($cCode) {
        $this->cCode = $cCode;
    }

}
?>
