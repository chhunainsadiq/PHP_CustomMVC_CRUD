<?php
/**
 * Created by PhpStorm.
 * User: hunain.sadiq
 * Date: 9/30/18
 * Time: 4:02 PM
 */

class baseModel implements modelInterface
{

    protected $db;
    /**
     * baseModel constructor.
     */
    function __construct()
    {
        $this->db = new DBContext();
    }

    /**
     * getAllRecords its defination is given in child class
     */
    function getAllRecords()
    {
        $result =$this->db->findAll($this);
        return $result;
    }

    /**
     * This is used to add the record values and call the database insert function to insert the record in DataBase
     */
    public function add()
    {
        foreach($this->db_fields as $key){
            $data[$key] = $this->$key;
        }
        $this->db->add($this->tablename,$data);
        return true;
    }

    /**
     * This will update the fields(that are mentioned in model) of record and call the updating function of
     *  database to also update in Database
     */
    public function update()
    {
        foreach($this->db_fields as $key){
            if(!is_null($this->$key)){
                $data[$key] = $this->$key;
            }
        }

        $where = ' ';
        foreach($this->primary_keys as $key){
            $where .=' '. $key ." = ".$this->$key." &&";
        }

        $where = rtrim($where,'&');
        $this->db->update($this->tablename,$this,$where);
        return true;
    }

    /**
     * This function is used to delete the specific record from the database
     */
    public function remove()
    {
        $where = ' ';
        foreach($this->$primarykey as $key){
            $where .=' '. $key ." = ".$this->$key." &&";
        }

        $where = rtrim($where,'&');
        $this->db->delete($this->tablename,$where);
        return true;
    }

    /**
     * The function is used to get information/data related to variables of specific class if they exists
     * This Function is used when updating a record
     * @param $obj of the model
     * @return mixed returns the data of the obj if it exits.
     */
    function getAnything($obj){

        if((property_exists($this, $obj)))
            return $this->$obj;
    }

    /**
     * Returns Database object (Use in Testing)
     * @return database  of database
     */
    function getDataBase(){
        return $this->db;
    }

    /**
     * It sets the Database Obj. (Use in Testing)
     * @param set obj of database
     */
    function setDataBase($obj){
        $this->db=$obj;
    }
}


?>
