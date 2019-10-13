<?php
/**
 * This file contains student model class
 */
/**
 * model class for student extends basemodel and implements model interface
 *@author Hunain.sadiq
 */
class studentModel extends baseModel
{
    /**
     * student id
     * @var int
     */
    private $ID;
    /**
     *student first name
     * @var string
     */
    private $fName;
    /**
     *student last name
     * @var type string
     */
    private $lName;
    /**
     *Student CGPA
     * @var float
     */
    private $CGPA;
    /**
     *Student db_fields
     */
    private $db_fields=["ID","fName","lName","CGPA"];
    /**
     *database table name for student class
     * @var string
     */
    public $tablename="student";
    /**
     *primary key for course table
     * @var string
     */
    public $primarykey=['ID'];

    /**
     * Default constructor calls basemodel constructor
     */
    function __construct(){

        parent::__construct();
    }
    /**
     * getter for student ID
     * @return integer student ID
     */
    function get_SID() {
        return $this->ID;
    }
    /**
     * getter for student first name
     *
     * @return string student first name
     */
    function get_fName() {
        return $this->fName;
    }
    /**
     * getter for student last name
     * @return string student last name
     */
    function get_lName() {
        return $this->lName;
    }
    /**
     * getter for student CGPA
     * @return float student CGPA
     */
    function get_CGPA() {
        return $this->CGPA;
    }
    /**
     * Setter for student id
     * @param int $ID Student Id
     */
    function set_SID($ID) {
        $this->ID = $ID;
    }
    /**
     * Setter for student first name
     * @param string $fName student first name
     */
    function set_fName($fName) {
        $this->fName = $fName;
    }
    /**
     * Setter for student last name
     * @param string $lName student last name
     */
    function set_lName($lName) {
        $this->lName = $lName;
    }
    /**
     * Setter for student CGPA
     * @param float $CGPA student CGPA
     */
    function set_CGPA($CGPA) {
        $this->CGPA = $CGPA;
    }


}

?>
