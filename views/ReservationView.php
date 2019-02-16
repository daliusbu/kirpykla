<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 19.33
 */

class ReservationView
{

    public function getForm($timesOcupied)
    {
        $allTimes = [];
        for ($hour=10; $hour<20; $hour++){
            for ($min =0; $min<60; $min+=15){
                $allTimes[] = [$hour, $min];
            }
        }
        if (in_array([12,30], $timesOcupied)){
            echo 'Time 12:30 is ocupied';
        }
        include 'templates/reservationForm.php';
        return $allTimes;
    }
}