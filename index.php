<?php


echo ('<h1>Labas</h1>');


$servername = "localhost";
$username = "nfq";
$password = "nfq";

try {
    $conn = new PDO("mysql:host=$servername;dbname=nfq", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully </br>";

    $stmt = $conn->query("SELECT * FROM hairdressers");
    while ($row = $stmt->fetch()) {
        echo $row['id']. " ";
        echo $row['firstname'] . " ";
        echo $row['phone']."<br />";
    }

}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


?>