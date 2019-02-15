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
}