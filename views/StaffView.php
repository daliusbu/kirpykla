<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 12.16
 */

class StaffView
{

//    private $modelObj;
//
//    private $controller;


    function __construct()   //$controller, $model
    {
//        $this->controller = $controller;
//
//        $this->modelObj = $model;

        print "About - ";
    }



    public function listAll($customers)
    {

        require 'templates/CustomerList.php';
    }



    public function now()
    {
//        return $this->modelObj->nowADays();
        return 'Mow';
    }

    public function today()
    {
//        return $this->controller->current();
        return 'Current';
    }


}