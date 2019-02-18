<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 12.16
 */

class StaffModel
{

    private $message;

    public function __construct()
    {
        $this->message = "Welcome to the of PHP MVC framework official site.";
    }

    public function getReservations()
    {
        include_once 'DatabaseHelpers.php';
        $firstName = $_POST['firstName']? $_POST['firstName']: '%';
        $lpp = $_POST['lpp']? $_POST['lpp']: 10;
        $startMonth = $_POST['startMonth']? $_POST['startMonth'] + 1: 1; //date("m");
        $startDay = $_POST['startDay']? $_POST['startDay']: 1; //date("d");
        $endMonth = $_POST['endMonth']? $_POST['endMonth'] + 1: 12; //date("m");
        $endDay = $_POST['endDay']? $_POST['endDay']: 31; //date("d");
        $db = new DatabaseHelpers;
        $reservations = $db->getRes($firstName, $lpp, $startMonth, $startDay, $endMonth, $endDay);
        return $reservations;
    }

    public function getAllCustomers()
    {
        require_once 'DatabaseHelpers.php';
        return (new DatabaseHelpers())->getAllCustomers();
    }

}