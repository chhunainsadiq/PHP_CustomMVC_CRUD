# PHP_CustomMVC_CRUD
Crud Application In Custom MVC Framework.
MVC APP FLOW";  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
......................................................................................................................................................

index.php-->includes autoloader class which includes Config.php have all constants possible directory paths.
index.php calls Bootstrap class static method "runApplicatio()" which has request class instance through request class static method.
request class has prepareURL method which dispatches the url getting controllerName,Action,ID and also form values

if(isset($url[4])) {
                $this->params['ID'] = $url[4];//Getting ID from GET method if any
}

//If request is post mainly add a record or update a record
            if($_SERVER['REQUEST_METHOD'] == 'POST') {

                foreach ($_POST as $key => $item) //GETTING FORM DATA PARAMETERS ARRAY
                {
                    $this->params[$key] = $item;//making array of params
                }
            }
 

Now Bootstrap Run Application method gets conrroller throuhg coontroller Factoroy and gets controllerName through requestobject->get_action Method.
Conroller factory implemented Singelton Pattern and initializes conroller e.g course which extends base Conroller.As base conroller has both baseModel
and ViewManager object as data member so course conroller calls setModel('courseModel'); method,written in base conroller.
This method uses model factory Method t get the model e.g course Model which extends base Model. 
public function setmodel($modelname) {

        $this->baseModel= modelFactory::getModel($modelname);
}

Base model has database Object which when initialezes calls PDO connection methods in it.Course Model has class (PDO::FETCH_CLASS ) explained below.

Now Bootstrap->RunApplication method calls controller Run method.Conroller Run Method checks if controller class has that Action Method in it 
or Not. and calls setView method accordingly

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



BaseController has setView Method in it

public function setview($viewname,$data) {
        $this->viewmanagerobj=new viewManager(str_replace("Controller","", get_class($this)),$viewname,$data);
    }


Views Structure is   views/course/add.php         i/e /foldername/view_file/         view_data = database obect query results.
                                 /listAll.php
                                 /edit.php


viewManagerObject constructor        

function __construct($foldername="",$view_file="",$view_data="") {

        $this->folder_name=$foldername;
        $this->view_file=$view_file;
        $this->view_data=$view_data;
    }

this is the render method to view HTML and form values



 public function render() {
        if(file_exists(VIEW.$this->folder_name.'/'.$this->view_file.'.php')) {

            include VIEW.$this->folder_name.'/'.$this->view_file.'.php';
        }
        elseif(file_exists(VIEW.'generic'.'/'.$this->view_file.'.php')) {

            include VIEW.'generic'.'/'.$this->view_file.'.php';
        }
    }


app/views/course/views/lisiAll.php

<?php
include dirname(__DIR__).'/../../app/views/layouts/default.php';
include dirname(__DIR__).'/../../app/views/layouts/defaultadd.php';
?>
