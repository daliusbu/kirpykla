<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 19.33
 */

class ReservationView
{

    public function getForm()
    {
        include 'templates/reservationForm.php';
    }

    public function resConfirm($custRes)
    {
        if($custRes[1][0][8] == 'isActive'){
            $isActive = true;
        }
        $months = ['sausis', 'vasaris',
            'kovas', 'balandis', 'gegužė',
            'birželis', 'liepa', 'rugpjūtis',
            'rugsėjis', 'spalis', 'lapkritis',
            'gruodis'];
        include 'templates/reservations/confirm.php';
        $message = 'This is reservation View';
        return $message;
    }
}