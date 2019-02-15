<?php


echo ('<h1>Labas</h1>');


// --- Routing a request ---
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

echo ($uri);






//$servername = "localhost";
//$username = "nfq";
//$password = "nfq";
//$database = "nfq";

$servername = "us-cdbr-iron-east-03.cleardb.net";
$username = "bdcf3ca3dc5a61";
$password = "8bdb1824";
$database = "heroku_c89f304222c3de3";

// --- page redirect logic ---

//if (!isset($_SERVER['PATH_INFO']))
//{
//
//
//    //echo "Home page";
//    exit();
//}

echo $_SERVER['PATH_INFO'];
exit();

print "The request path is : ".$_SERVER['PATH_INFO'];

// ----------------------


try {
//    Connect to the database
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully </br>";

    $table= "workers";
    $columns = "id INT( 11 ) AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR( 50 ) NOT NULL, phone VARCHAR( 50 ),
     status VARCHAR( 50 ), password VARCHAR(50) NOT NULL " ;


    $createTable = $conn->exec("CREATE TABLE IF NOT EXISTS $database.$table ($columns)");

    if ($createTable)
    {
        echo "Table $table - Created!<br /><br />";
    }
    else { echo "Table $table not successfully created! <br /><br />";
    }
//    Insert a new record
//    $sql = "INSERT INTO $database.$table (firstname, phone, status, password) VALUES ('Rabinas', 'vienasvienas', 'laisvas', 'rabinas')";
//    $added = $conn->exec($sql);
//    if ($added){
//        echo ('Record added');
//    }


//    print out all records
    $stmt = $conn->query("SELECT * FROM  $database.$table ");
    while ($row = $stmt->fetch(PDO::FETCH_NUM)){
        echo ("<p>{$row[1]} $row[2] $row[3] $row[4]</p>");
    }



}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}


?>