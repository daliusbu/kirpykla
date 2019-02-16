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
}