<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 12.16
 */

class StaffView
{
    function __construct()
    {
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

        require 'templates/staff/showResCust.php';
    }




}