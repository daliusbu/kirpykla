<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 12.03
 */

class IndexView
{

    private $model;

    private $controller;


    function __construct($controller, $model)
    {
        $this->controller = $controller;

        $this->model = $model;

        print "Home - ";
    }

    public function index()
    {
        return $this->controller->sayWelcome();
    }

    public function action()
    {
        return $this->controller->takeAction();
    }
}