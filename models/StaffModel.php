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

    public function nowADays()
    {
        return $this->message = "nowadays everybody wants to be a boss.";
    }

    public function getit()
    {
        return 'OHOOHO';
    }

    public function getReservations()
    {
        include_once 'DatabaseHelpers.php';
        $db = new DatabaseHelpers;
        $reservations = $db->getRes();
        return $reservations;
    }

    public function getAllCustomers()
    {
        require_once 'DatabaseHelpers.php';
        return (new DatabaseHelpers())->getAllCustomers();
    }

}