<?php
/**
 * This file contains teacher model
 */
/**
 * model class for teacher extends basemodel and implements model interface
 *@author Hunain.sadiq
 */
class teacherModel extends baseModel
{
    /**
     *Teacher ID
     * @var int
     */
    private $ID=0;
    /**
     *Teacher first name
     * @var string
     */
    private $fName=null;
    /**
     *Teacher last name
     * @var string
     */
    private $lName=null;
    /**
     *database table name for teacher class
     * @var string
     */
    public $tablename="teacher";
    /**
     *primary key for teacher table
     * @var string
     */
    /**
     *course db_fields
     */
    private $db_fields=["ID","fName","lName"];
    public $primarykey=['ID'];

    /**
     * Default constructor calls basemodel constructor
     */
    function __construct(){
        parent::__construct();
    }
    /**
     * getter for teacher's ID
     * @return integer teacher ID
     */
    function get_TID() {
        return $this->ID;
    }
    /**
     * getter for teacher's first name
     * @return string teacher first name
     */
    function get_fName() {
        return $this->fName;
    }
    /**
     * getter for teacher's last name
     * @return string teacher last name
     */
    function get_lName() {
        return $this->lName;
    }
    /**
     * Setter for teacher id
     * @param int $ID Teacher ID
     */
    function set_TID($ID) {
        $this->ID = $ID;
    }
    /**
     * Setter for teacher first name
     * @param string $fName Teacher first name
     */
    function set_fName($fName) {
        $this->fName = $fName;
    }
    /**
     * Setter for teacher last name
     * @param string $lName
     */
    function set_lName($lName) {
        $this->lName = $lName;
    }


}
?>
