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

    private $belekas = '<h1> this is a test h1</h1>';


    function __construct($controller, $model)
    {
        $this->controller = $controller;

        $this->model = $model;

        print $this->belekas;

    }

    public function showAll()
    {

    }

    public function index()
    {
        $ourlist = ['peter', 'gabriel', 'the third'];
        require 'templates/CustomerList.php';
        return $this->controller->sayWelcome();
    }

    public function action()
    {
        return $this->controller->takeAction();
    }
}