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

    $table= "workers";
    $columns = "id INT( 11 ) AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR( 50 ) NOT NULL, phone VARCHAR( 50 )
     status VARCHAR( 50 ) " ;


    $createTable = $conn->exec("CREATE TABLE IF NOT EXISTS heroku_c89f304222c3de3.$table ($columns)");

    if ($createTable)
    {
        echo "Table $table - Created!<br /><br />";
    }
    else { echo "Table $table not successfully created! <br /><br />";
    }


}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


?>