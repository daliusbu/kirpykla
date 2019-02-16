<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 12.03
 */

class IndexModel
{

    private $message = 'Welcome to Home page.';

    function __construct()
    {

    }

    public function welcomeMessage()
    {
        return $this->message;
    }

}