<?php
/**
 * This file contains base controller class
 */
/**
 * base controller class having common functionality among all other controllers
 * @author Hunain Sadiq
 */
class baseController implements controllerInterface
{
    /**
     *View manager object that is used to initialize view object from child controllers
     * @var object
     */
    protected $viewmanagerobj;
    /**
     *Base model object used in child controllers to call respective models through this object
     * @var object
     */
    public $baseModel;
    /**
     *A flag to check if a view is needs to be open or not
     * @var bool
     */
    private $flage=true;
    /**
     * getter for flag
     * @return bool
     */
    function get_flage() {
        return $this->flage;
    }
    /**
     * Getter for view manager object
     * @return object
     */
    function get_viewmanagerobj() {
        return $this->viewmanagerobj;
    }
    /**
     * Getter for Base model object
     * @return object
     */
    function get_baseModel() {
        return $this->baseModel;
    }
    /**
     * Setter for view manager object
     * @param object $viewmanagerobj
     */
    function set_viewmanagerobj($viewmanagerobj) {
        $this->viewmanagerobj = $viewmanagerobj;
    }
    /**
     * Setter for Base model object
     * @param object $baseModel
     */
    function set_baseModel($baseModel) {
        $this->baseModel = $baseModel;
    }
    /**
     * This is default action method for all modules
     */
    function index() {

    }
    /**
     *A method checks if an action method is exists if exists then calls that action method otherwise default action method index which runs application
     */
    public function run() {

        $request= request::getInstance();
        $action=defaultMethod;
        //$this has controller object of specific type
        if(method_exists($this, $request->get_action())) {
            $action=$request->get_action();
        }
        $this-> $action();
        if ($this->flage==TRUE) {

            $this->setview($action,$this->baseModel);
        }
        else
        {
            $this->setview(defaultMethod,$this->baseModel);
        }
        $this->viewmanagerobj->render();
    }
    /**
     * Function to set view manager's view file and data
     * @param stirng $viewname
     * @param object $data model object
     */
    public function setview($viewname,$data) {
        $this->viewmanagerobj=new viewManager(str_replace("Controller","", get_class($this)),$viewname,$data);
    }
    /**
     * function to set base model to a specific type latter used for calling a model
     * @param string $modelname model name to set
     */
    public function setmodel($modelname) {

        $this->baseModel= modelFactory::getModel($modelname);
    }
    /**
     * generic add for adding student, teacher and course
     */
    function add() {

    }
    /**
     * This function returns a record for delete depending upon ID
     */
    public function delete() {
        $params= request::getInstance()->get_params();
        $this->baseModel=$this->baseModel->getById($params);

    }
    /**
     * his function returns a record for update depending upon ID
     */
    public function edit() {
        $params= request::getInstance()->get_params();
        $this->baseModel=$this->baseModel->getById($params);//getting record from model
    }
    /**
     * A generic list down method returns records for required entity
     */
    public function listdown() {

        $this->baseModel= $this->baseModel->getAllRecords();//calling method of model for record
    }
    /**
     * A generic delete method, deletes record from database
     */
    public function deleteRecord() {
        //$params= request::getInstance()->get_params();
        $this->baseModel->remove();//calling model's delete method
        $this->flage=FALSE;
    }
    /**
     * This function adds new record into database
     */
    function addNewRecord() {
        //$params= request::getInstance()->get_params();
        $this->baseModel->add();
        $this->flage=FALSE;
    }
    /**
     * This function adds updated record into database
     */
    public function addUpdates() {
        //$params= request::getInstance()->get_params();
        $this->baseModel->Update();
        $this->flage=FALSE;
    }
}
?>
