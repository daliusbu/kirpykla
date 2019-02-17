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

    public function resConfirm($cust)
    {


        include 'templates/reservations/confirm.php';
        $message = 'This is reservation View';
        return $message;
    }
}