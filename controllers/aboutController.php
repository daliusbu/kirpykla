<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 12.16
 */

class AboutController
{

    private $modelObj;

    function __construct( $model )
    {
        $this->modelObj = $model;

    }

    public function current()
    {
        return $this->modelObj->message = "About us today changed by aboutController.";
    }

}