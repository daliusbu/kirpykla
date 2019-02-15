<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 12.16
 */

class AboutView
{

    private $modelObj;

    private $controller;


    function __construct($controller, $model)
    {
        $this->controller = $controller;

        $this->modelObj = $model;

        print "About - ";
    }

    public function now()
    {
        return $this->modelObj->nowADays();
    }

    public function today()
    {
        return $this->controller->current();
    }


}