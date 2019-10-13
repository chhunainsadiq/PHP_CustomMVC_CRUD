<?php
/**
 * Created by PhpStorm.
 * User: hunain.sadiq
 * Date: 9/30/18
 * Time: 4:03 PM
 */
/**
 * Interface modelInterface
 */
interface modelInterface
{
    // for getting all records
    function getAllRecords();

    //for updating a record
    function update();

    //for adding a record
    function add();

    //for removing a record
    function remove();
}

?>
