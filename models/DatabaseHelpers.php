<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.2.15
 * Time: 14.40
 */

class DatabaseHelpers
{

    public function testing()
    {
        return 'testing';
    }



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

    public function getAllTimes()
    {
        $conn = $this->connect();
        $timesOcupied = [];
        $table = "reservations";
        $stmt = $conn->query("SELECT rezHour, rezMin FROM $table");
        while ($row = $stmt->fetch(PDO::FETCH_NUM)){
            $timesOcupied[] = $row ;
        }
        return $timesOcupied;
    }

    public function storeReservation($reservation)
    {
        $conn = $this->connect();
        $table = "reservations";

        $month = $reservation['month'];
        $day = $reservation['day'];
        $timeArray = explode('|',$reservation['time']);
        $hour = $timeArray[0];
        $min = $timeArray[1];

        return $conn->exec("INSERT INTO $table (customerId, dateFill, rezMonth, rezDay, rezHour, rezMin) VALUES  (12, NOW(), $month, $day, $hour, $min)");
    }

    public function getBusyTimes($month, $day)
    {
        $conn = $this->connect();
        $timesOccupied = [];
        $table = "reservations";
        $stmt = $conn->query("SELECT rezHour, rezMin  FROM $table WHERE rezMonth = $month AND rezDay = $day");
        while ($row = $stmt->fetch(PDO::FETCH_NUM)){
            $timesOccupied[] = $row ;
        }
        return $timesOccupied;
    }

    private function getCustByName($conn, $firstName, $phone){
        $row = $conn->query("SELECT * FROM customers WHERE firstName = '$firstName' AND phone = '$phone'")->fetch();
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
}