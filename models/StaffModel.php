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

        // Result filtering
        $firstName = $_GET['firstName']? $_GET['firstName']: '%';
        $lpp = $_GET['lpp']? $_GET['lpp']: 10;
        $startMonth = $_GET['startMonth']? $_GET['startMonth'] + 1: 1; //date("m");
        $startDay = $_GET['startDay']? $_GET['startDay']: 1; //date("d");
        $endMonth = $_GET['endMonth']? $_GET['endMonth'] + 1: 12; //date("m");
        $endDay = $_GET['endDay']? $_GET['endDay']: 31; //date("d");

        $db = new DatabaseHelpers;

        // Pagination

// For checking of number of rows assume $offset = 0, to be replace by sepparate DB query
        $offset = 0;
        $reservations = $db->getRes($firstName, $lpp, $offset, $startMonth, $startDay, $endMonth, $endDay);

        $numrows = $reservations[1];
        $totalpages = ceil($numrows[0] / $lpp);
//        var_dump($totalpages);

        if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
            // cast var as int
            $currentpage = (int) $_GET['currentpage'];
        } else {
            // default page num
            $currentpage = 1;
        } // end if
        if ($currentpage > $totalpages) {
            // set current page to last page
            $currentpage = $totalpages;
        } // end if
// if current page is less than first page...
        if ($currentpage < 1) {
            // set current page to first page
            $currentpage = 1;
        } // end if
        $offset = ($currentpage - 1) * $lpp;

        $reservations = $db->getRes($firstName, $lpp, $offset, $startMonth, $startDay, $endMonth, $endDay);

        return [$reservations[0], $currentpage, $totalpages];

    }

    public function removeRes($ids)
    {
        require_once 'DatabaseHelpers.php';
        return (new DatabaseHelpers())->removeRes($ids);
    }

    public function getAllCustomers()
    {
        require_once 'DatabaseHelpers.php';
        return (new DatabaseHelpers())->getAllCustomers();
    }

}