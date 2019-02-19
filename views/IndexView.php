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
    }

    public function index()
    {
        session_start();
        include (__DIR__ . '/../config/env.php');
        include ('templates/home.php');
    }
}