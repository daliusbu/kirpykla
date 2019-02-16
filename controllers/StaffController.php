<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 12.16
 */

class StaffController
{

    private $modelObj;
    private $viewObj;

    function __construct( $model, $view )
    {
        $this->modelObj = $model;
        $this->viewObj = $view;

    }

    public function current()
    {
        return $this->modelObj->message = "About us today changed by aboutController.";
    }

    public function listAll($params = 'default')
    {
        $customers = $this->modelObj->getAllcustomers();
        return $this->viewObj->listAll($customers);

        return "This is " . $customers[1][1];
    }
}