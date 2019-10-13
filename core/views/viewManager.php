<?php
/**
 * This file contains view manager class
 */
/**
 * Intermediate class used to check required view and open it
 */
require_once dirname(__DIR__).'/../app/config.php';
class viewManager
{
    /**
     * A folder name that contains view
     * @var string
     */
    private $folder_name;
    /**
     *view name that needs to be open
     * @var string
     */
    private $view_file;
    /**
     *the data that needs to be sent and show on view
     * @var array[]
     */
    private $view_data;
    /**
     * default constructor is used to initialize both data members
     * @param string $foldername folder name
     * @param string $view_file
     * @param array[] $view_data
     */
    function __construct($foldername="",$view_file="",$view_data="") {

        $this->folder_name=$foldername;
        $this->view_file=$view_file;
        $this->view_data=$view_data;
    }
    /**
     * Getter for view file to be open
     * @return string
     */
    function get_view_file() {
        return $this->view_file;
    }
    /**
     * Getter for view data object
     * @return object
     */
    function get_view_data() {
        return $this->view_data;
    }

    /**
     * Method to check if required view exists or not
     * if exists then open it
     */
    public function render() {
        if(file_exists(VIEW.$this->folder_name.'/'.$this->view_file.'.php')) {

            include VIEW.$this->folder_name.'/'.$this->view_file.'.php';
        }
        elseif(file_exists(VIEW.'generic'.'/'.$this->view_file.'.php')) {

            include VIEW.'generic'.'/'.$this->view_file.'.php';
        }
    }
}
?>
