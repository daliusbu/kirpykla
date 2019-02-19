<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 19.33
 */

class ReservationView
{

    public function getForm($msg)
    {
        session_start();
        include (__DIR__ . '/../config/env.php');
        include 'templates/reservationForm.php';
    }

    public function resConfirm($custRes)
    {
        session_start();
        include (__DIR__ . '/../config/env.php');

        if($custRes[1][0][8] == 'isActive'){
            $isActive = true;
        }
        $months = ['sausis', 'vasaris',
            'kovas', 'balandis', 'gegužė',
            'birželis', 'liepa', 'rugpjūtis',
            'rugsėjis', 'spalis', 'lapkritis',
            'gruodis'];
        include 'templates/reservations/confirm.php';

    }

    public function showUpdateForm()
    {
        session_start();
        include (__DIR__ . '/../config/env.php');
        include 'templates/updateForm.php';
    }
}