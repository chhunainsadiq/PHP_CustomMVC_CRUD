<?php
/**
 *This file contains database context class
 */

/**
 * A moderator class b/w model and database used to insert any condition
 *
 * @author Hunain.sadiq
 */
class DBContext {
    /**
     *database class object
     * @var object
     */
    public $database;
    /**
     * Default construct for DBContext to initialize database object
     */
    public function __construct() {
        $this->database=new database();
    }
    /**
     * A method is used to make where clause from an array
     * @param array $conditions
     * @return string
     */
    private function makeWhere($conditions=array()) {
        $where='';
        foreach ($conditions as $key => $value)
        {
            if(is_string($value)) {

                $where.=' '.$key . '= "'. $value.'"'." &&";
            }
            else {
                $where.=' '.$key. ' = '.$value." &&";
            }
        }
        return  $where= rtrim($where,"&");
    }

    /**
     * A method used for finding an object
     * @param object $basemodel a base model object
     * @param array $conditions having information about condition
     * @param string $fields required database field name
     * @return object returns a single record
     */
    public function find($basemodel,$conditions=array(), $fields='*') {

        $where= $this->makeWhere($conditions);
        $this->database->select($basemodel->tablename,$where,$fields);
        return $this->database->singleObject($basemodel->tablename);
    }
    /**
     * A method for finding all objects
     * @param object $basemodel a base model object
     * @param array $conditions having information about condition
     * @param string $fields required database field name
     * @return object returns a single record
     */
    public function findAll($basemodel,$conditions=array(), $fields='*') {

        $where= $this->makeWhere($conditions);
        $this->database->select($basemodel->tablename,$where,$fields);
        return $this->database->objectSet($basemodel->tablename);
    }
    /**
     * a method is used to update record
     * @param object $basemodel base model object
     * @param array $data having data to be updated
     * @param string $primarykey primary key of database table
     */
    public function update($basemodel,$data) {
        $where="";
        $where.=' '.$basemodel->primarykey. '= "'. $data[$basemodel->primarykey].'"';
        unset($data[$basemodel->primarykey]);
        return $this->database->update($basemodel->tablename, $data,$where);
    }
    /**
     * A method used to insert a record
     * @param object $basemodel base model object
     * @param array $data having data to be updated
     */
    public function add($basemodel,$data) {
        return $this->database->insert($basemodel->tablename, $data);
    }
    /**
     * A method used to delete a record
     * @param object $basemodel base model object
     * @param array $data having data to be updated
     */
    public function delete($basemodel,$data) {
        $where="";
        $where.=' '.$basemodel->primarykey. '= "'. $data[$basemodel->primarykey].'"';
        unset($data[$basemodel->primarykey]);
        return $this->database->deleteRecord($basemodel->tablename,$where);
    }
}
