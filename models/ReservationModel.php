<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 19.32
 */

class ReservationModel
{
// Adds reservation to reservation table and adds or updates customer data in customers table
// returns all customer and reservation data in array of 2 arrays
    public function addReservation($reservation)
    {
        $firstName = $reservation['firstName'];
        $phone = $reservation['phone'];

        include_once 'DatabaseHelpers.php';
        $db = new DatabaseHelpers;
        $cust = $db->updateCust($firstName, $phone, 1);
        $res = $db->storeReservation($reservation, $cust['id']);

        return [$cust, $res];
    }


    public function getCustomer($namePhone)
    {
        include_once 'DatabaseHelpers.php';
        $db = new DatabaseHelpers;
        return $db->getCustByName($namePhone['firstName'], $namePhone['phone']);
    }



    public function getActiveReservations($id)
    {
        include_once 'DatabaseHelpers.php';
        $db = new DatabaseHelpers;
        $reservations = $db->getActiveRes($id);

        return $reservations;
    }

// Returns array of times that are not in reservation database on passed in date
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

    public function removeRes($ids)
    {
        require_once 'DatabaseHelpers.php';
        return (new DatabaseHelpers())->removeRes($ids);
    }

}