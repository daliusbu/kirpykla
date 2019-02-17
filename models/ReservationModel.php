<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 19.32
 */

class ReservationModel
{

    public function getList()
    {
        include_once 'DatabaseHelpers.php';
        $db = new DatabaseHelpers;
        $timesOcupied = $db->getAllTimes();
        return $timesOcupied;
    }

    public function addReservation($reservation){

        $firstName = $reservation['firstName'];
        $phone = $reservation['phone'];

        include_once 'DatabaseHelpers.php';
        $db = new DatabaseHelpers;
        $cust = $db->updateCust($firstName, $phone, 1);


        $result = $db->storeReservation($reservation);
        return $cust;
    }

    public function getFreeTimes($month, $day)
    {
        include_once 'DatabaseHelpers.php';
        $db = new DatabaseHelpers;
        $busyTimes = $db->getBusyTimes($month, $day);
        $freeTimes = [];
        for ($i = 10; $i<20; $i++){
                    for ($j= 0; $j<60; $j+=15){
                        if (!in_array([$i, $j], $busyTimes)){
                            $freeTimes[] = [$i, $j];
                        }
                    }
                }

        return $freeTimes;
    }
}