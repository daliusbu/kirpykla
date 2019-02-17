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
        print "About - ";
    }



    public function listAll($customers)
    {

        require 'templates/CustomerList.php';
    }


    public function showReservations($resCust)
    {
        $months = ['sausis', 'vasaris',
            'kovas', 'balandis', 'gegužė',
            'birželis', 'liepa', 'rugpjūtis',
            'rugsėjis', 'spalis', 'lapkritis',
            'gruodis'];

        require 'templates/staff/resCust.php';
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