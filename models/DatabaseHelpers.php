<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 14.40
 */

class DatabaseHelpers
{
//============= Connect to database ==============================
    public function connect()
    {
        $servername = "us-cdbr-iron-east-03.cleardb.net";
        $username = "bdcf3ca3dc5a61";
        $password = "8bdb1824";
        $database = "heroku_c89f304222c3de3";
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }


    public function getAllCustomers()
    {
        $conn = $this->connect();
        $customers = [];
        $table = "workers";
        $stmt = $conn->query("SELECT * FROM $table ");
        while ($row = $stmt->fetch(PDO::FETCH_NUM)){
            $customers[] = $row ;
        }
        return $customers;
    }


//============= reservations ==============================

    public function storeReservation($reservation, $custId)
    {
        $conn = $this->connect();
        $table = "reservations";

        $month = $reservation['month'];
        $day = $reservation['day'];
        $timeArray = explode('|',$reservation['time']);
        $hour = $timeArray[0];
        $min = $timeArray[1];
        $status = 'active';

//      Check if customer has active reservations
        $isActive = $this->getActiveRes($custId);
        if ($isActive){
            $isActive[0][] = 'isActive';
            return $isActive;
        }
        $conn->exec("INSERT INTO $table (customerId, dateFill, rezMonth, rezDay, rezHour, rezMin, status) VALUES  ($custId, NOW(), $month, $day, $hour, $min, '$status')");

        $result = $this->getActiveRes($custId);
        return $result;

    }

    public function getActiveRes($custId)
    {
        $conn = $this->connect();

        $stmt = $conn->prepare("SELECT *  FROM reservations WHERE customerId = :customerId AND status = 'active'");
        $stmt->execute( array(':customerId'=> $custId));

        while ($row = $stmt->fetch()){
            $reservations[] = $row ;
        }
        return $reservations;
    }

    public function getBusyTimes($month, $day)
    {
        $conn = $this->connect();
        $timesOccupied = [];
        $table = "reservations";
        $stmt = $conn->prepare("SELECT rezHour, rezMin  FROM $table WHERE rezMonth = :rezMonth AND rezDay = :rezDay");
        $stmt->execute( array(':rezMonth'=> $month, ':rezDay' => $day));

        while ($row = $stmt->fetch(PDO::FETCH_NUM)){
            $timesOccupied[] = $row ;
        }
        return $timesOccupied;
    }


    private function getCustByName($conn, $firstName, $phone){
        $row = $conn->query("SELECT * FROM customers WHERE firstName = '$firstName'AND phone = '$phone'")->fetch();
        return $row?  $row: -1;
    }

    public function updateCust($firstName, $phone, $visit){
        $conn = $this->connect();
        $cust = $this->getCustByName($conn, $firstName, $phone);
        if ($cust == -1){
            $visits = 1;
            $conn->exec("INSERT INTO customers (created, firstName, phone, visits) VALUES  (NOW(), '$firstName', '$phone', $visits)");
        }else{
            $visits = $cust['visits'] + $visit;
            $id = $cust['id'];
            $conn->exec("UPDATE customers SET visits=$visits WHERE id = $id");
        }

        $cust = $this->getCustByName($conn, $firstName, $phone);
        return $cust;

    }



//============= remove reservations  ==============================

    public function removeRes($ids)
    {
        $conn = $this->connect();
        $id = $ids[0];
        $custId = $ids[1];
        $result = $conn->exec("DELETE FROM reservations WHERE id = $id AND customerId = $custId");
        return $result;
    }


//============= get reservations AND customers ==============================

    public function getActResById($id){
        $conn = $this->connect();
        $row = $conn->query("SELECT (id, firstName, phone) FROM customers WHERE id=$id")->fetch();
        return $row;
    }



    public function getRes($firstName, $lpp, $offset, $startMonth, $startDay, $endMonth, $endDay)
    {
        $conn = $this->connect();

        // Count Total number of records
        $stmt1 = $conn->query("SELECT COUNT(r.id) FROM reservations r INNER JOIN customers c ON r.customerId = c.id WHERE r.status = 'active' AND c.firstName LIKE '$firstName%' AND ((r.rezMonth = $startMonth  AND r.rezDay >= $startDay) OR (r.rezMonth < $endMonth AND r.rezMonth > $startMonth)OR ( r.rezMonth = $endMonth AND r.rezDay <= $endDay)) ");
        $totalRecords = $stmt1->fetch();

        // Select line per page (lpp) number of records
        $stmt2 = $conn->query("SELECT * FROM reservations r INNER JOIN customers c ON r.customerId = c.id WHERE r.status = 'active' AND c.firstName LIKE '$firstName%' AND ((r.rezMonth = $startMonth  AND r.rezDay >= $startDay) OR (r.rezMonth < $endMonth AND r.rezMonth > $startMonth)OR ( r.rezMonth = $endMonth AND r.rezDay <= $endDay)) ORDER BY c.visits DESC LIMIT $offset, $lpp");
        while ($row = $stmt2->fetch()){
            $reservations[] = $row ;
        }
        return [$reservations, $totalRecords];
    }


}