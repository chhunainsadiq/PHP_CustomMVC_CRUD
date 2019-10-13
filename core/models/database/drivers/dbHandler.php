<?php
/**
 * This file contains db Handler class
 */
/**
 * Database Handler class used for doing pdo operations
 */
class dbHandler
{
    /**
     *Database connection object
     * @var object
     */
    private static $pdo = null;
    /**
     * Statement used to execute database operations
     * @var object
     */
    public $statement;

    /**
     * Call this method to get singleton
     *
     * @return object returns connection object
     */
    public static function getInstance() {
        if (self::$pdo === null) {
            try {
                $dsn="mysql".':host=' . "localhost". ';dbname=' ."PHP_MVC_CRUD";
                return  self::$pdo = new PDO($dsn, "root", "");
                echo"connection established";
            }
            catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
        else {
            return self::$pdo;
        }
    }
    /**
     * Private constructor so nobody else can instantiate it
     *
     */
    private function __construct() {

    }
    /**
     * A method used to check the type of $value
     * @param object $value can have any datatype
     * @return object
     */
    public function checktype($value) {
        $type=null;
        switch (TRUE)
        {
            case is_int($value):
                $type= PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type= PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type= PDO::PARAM_NULL;
                break;
            default:
                $type= PDO::PARAM_STR;
        }
        return $type;
    }
    /**
     * A method used to bind parameter to key for query
     * @param object $param key to bind value
     * @param type $value actual value
     * @param type $type value type
     */
    public function bindValue($param,$value,$type) {
        if(is_null($type)) {
            $type= $this->checktype($value);
        }
        $this->statement->bindValue($param,$value,$type);
    }

    /**
     * Prepare and return statement
     * @param string $query
     */
    public function prepare($query) {
        $pdo=self::getInstance();
        $this->statement= $pdo->prepare($query);
    }
    /**
     * Execute the statement
     */
    public function execute() {
        if(!$this->statement->execute()) {
            var_dump( $this->statement->errorinfo());
            return FALSE;
        }
        else {
            return TRUE;
        }
    }
    /**
     * A method that returns all records fetched from database
     * @param string $entityClass model name on which database entity will be maped
     * @return object objects of class
     */
    public function objectSet($entityClass) {
        return $this->statement->fetchAll(PDO::FETCH_CLASS,$entityClass."Model");
    }
    /**
     * A method that returns single record fetched from database
     * @param string $entityClass model name on which database entity will be maped
     * @return object object of class
     */
    public function singleObject($entityClass) {
        return $this->statement->fetchObject($entityClass."Model");
    }
}
?>
