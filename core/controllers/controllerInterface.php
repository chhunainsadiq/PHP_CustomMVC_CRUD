<?php
/**
 * This file contains controller interface
 */
/**
 * Controller interface, if a controller implements this interface then it should have to implements these functions
 */
interface controllerInterface
{
    /**
     * list down all records
     */
    public function listdown();
    /**
     * Add updated data into database
     */
    public function addUpdates();
    /**
     * Deletes record from database
     */
    public function deleteRecord();
    /**
     * Runs application
     */
    public function run();

}

?>
