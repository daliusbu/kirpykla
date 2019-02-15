<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 12.02
 */

class IndexController
{

    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function sayWelcome()
    {
        return $this->model->welcomeMessage();
    }

}