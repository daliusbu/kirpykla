<?php


echo ('<h1>Labas</h1>');


//$servername = "localhost";
//$username = "nfq";
//$password = "nfq";

$servername = "us-cdbr-iron-east-03.cleardb.net";
$username = "bdcf3ca3dc5a61";
$password = "8bdb1824";




try {
    $conn = new PDO("mysql:host=$servername;dbname=heroku_c89f304222c3de3", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully </br>";

//    $stmt = $conn->query("SELECT * FROM hairdressers");
    $stmt = $conn->query("SELECT * FROM sys.tables");

    echo $stmt;
//    while ($row = $stmt->fetch()) {
//        echo $row['id']. " ";
//        echo $row['firstname'] . " ";
//        echo $row['phone']."<br />";
//    }

}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


?>