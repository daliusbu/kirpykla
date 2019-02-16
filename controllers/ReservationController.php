<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 19.31
 */

class ReservationController
{

    private $modelObj;
    private $viewObj;

    function __construct( $model, $view )
    {
        $this->modelObj = $model;
        $this->viewObj = $view;
    }

    public function test()
    {
        return "<h3>This is reservation controller</h3>";
    }

    public function make()
    {
        $timesReserved = $this->modelObj->getList();
        $rezForm = $this->viewObj->getForm($timesReserved);

        return $rezForm[36][1];
    }


    public function confirm()
    {
        echo 'Confirm method activated';
        var_dump($_POST);
    }

    public function listAll($params = 'default')
    {

        $customers = $this->modelObj->getAllcustomers();
        return $this->viewObj->listAll($customers);

        return "This is " . $customers[1][1];
    }
}