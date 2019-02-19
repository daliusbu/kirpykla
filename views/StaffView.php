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


    public function showReservations($resCust, $msg)
    {
        session_start();
        include (__DIR__. '/../config/env.php');
        if(!isset($_SESSION['UserData']['Username'])){
            header('location:' . ROOT_URL . LOGIN_URL);
        exit;
        }

        $currentpage = $resCust[1];
        $totalpages = $resCust[2];

        $months = ['sausis', 'vasaris',
            'kovas', 'balandis', 'gegužė',
            'birželis', 'liepa', 'rugpjūtis',
            'rugsėjis', 'spalis', 'lapkritis',
            'gruodis'];

        require 'templates/staff/showResCust.php';
    }



}