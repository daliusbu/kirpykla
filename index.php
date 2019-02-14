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
    $sql = "CREATE TABLE workers (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
      firstname VARCHAR(30) NOT NULL,
      phone VARCHAR(30) NOT NULL,
      status VARCHAR(50),
)";

    if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


?>