<?php
/**
 * This file contains database class
 */
/**
 * A class used to do database operations like select update delete etc
 */
class database
{
    /**
     *database connection object
     * @var object
     */
    public $dbHandler='';
    /**
     * default constructor used to initialize database connection
     */
    function __construct() {
        $this->dbHandler= dbHandler::getInstance();
    }
    /**
     * Prepare and return statement
     * @param string $query
     */
    public function prepare($query) {
        return $this->dbHandler->prepare($query);
    }
    /**
     * Binds the values of the parameters in the statement
     * @param string $param
     * @param object $value
     * @param object $type
     */
    public function bind($param,$value,$type=null) {

        $this->dbHandler->bindValue($param,$value,$type);
    }
    /**
     * Execute the statement
     */
    public function execute() {
        return  $this->dbHandler->execute();
    }
    /**
     * selects data from table
     * @param string $table
     * @param string $where
     * @param type $fields
     */
    public function select($table,$where='',$fields='') {
        $query="SELECT $fields FROM $table "
            . ($where ? "WHERE $where ": '');
        return $this->prepare($query);
    }
    /**
     * A method is used for inserting data into database
     * @param string $table database table name
     * @param array $data having required record
     */
    public function insert($table,$data) {
        ksort($data);
        $fieldNames= implode(',', array_keys($data));
        $fieldValues= ':'.implode(', :', array_keys($data));

        $query="INSERT INTO $table ($fieldNames) VALUES($fieldValues)";

        $this->prepare($query);
        foreach ($data as $key => $value)
        {
            $this->bind(":$key", $value);
        }
        return $this->execute();
    }
    /**
     * A method is used for updating a record from database
     * @param string $table database table name
     * @param array $data having required record
     * @param string $where condition on which record will be updated
     */
    public function update($table, array $data,$where='') {

        ksort($data);
        $fieldDetails=NULL;
        //making pairs for key value for exp ID=:ID
        foreach ($data as $key => $value)
        {
            $fieldDetails.="$key =:$key,";
        }
        //omits last ,
        $fieldDetails= rtrim($fieldDetails,",");

        $query="UPDATE $table SET $fieldDetails ". ($where ? 'WHERE '.$where : '');

        $this->prepare($query);
        //Binding params to query
        foreach ($data as $key => $value)
        {
            $this->bind(":$key", $value);
        }
        //finaly executes the query
        return $this->execute();
    }
    /**
     * A method is used to delete a record from database
     * @param string $table database table name
     * @param string $where condition on which record will be updated
     */
    public function deleteRecord($table,$where) {
        $this->prepare("DELETE FROM $table WHERE $where");
        return $this->execute();
    }
    /**
     * A method that returns all records fetched from database
     * @return array an associative array
     */
    public function objectSet($entityClass) {
        $this->execute();
        return $this->dbHandler->objectSet($entityClass);
    }
    /**
     * A method that returns single record fetched from database
     * @return array an associative array
     */
    public function singleObject($entityClass) {
        $this->execute();
        return $this->dbHandler->singleObject($entityClass);
    }
}

?>
