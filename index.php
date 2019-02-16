<?php


echo ('<h1>Labas</h1>');

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';

if ($url == '/')
{

    // This is the home page
    // Initiate the home controller
    // and render the home view

    require_once __DIR__ . '/models/IndexModel.php';
    require_once __DIR__ . '/controllers/IndexController.php';
    require_once __DIR__ . '/views/IndexView.php';

    $indexModel = New IndexModel();
    $indexController = New IndexController($indexModel);
    $indexView = New IndexView($indexController, $indexModel);

    print $indexView->index();

}else{


    // This is not home page
    // Initiate the appropriate controller
    // and render the required view

    //The first element should be a controller
    $requestedController = ucFirst($url[0]);

    // If a second part is added in the URI,
    // it should be a method
    $requestedAction = isset($url[1])? $url[1] :'';

    // The remain parts are considered as
    // arguments of the method
    $requestedParams = array_slice($url, 2);

    // Check if controller exists. NB:
    // You have to do that for the model and the view too
    $ctrlPath = __DIR__.'/controllers/'.$requestedController.'Controller.php';



    if (file_exists($ctrlPath))
    {

        require_once __DIR__.'/models/'.$requestedController.'Model.php';
        require_once __DIR__.'/controllers/'.$requestedController.'Controller.php';
        require_once __DIR__.'/views/'.$requestedController.'View.php';

        $modelName      = ucfirst($requestedController).'Model';
        $controllerName = ucfirst($requestedController).'Controller';
        $viewName       = ucfirst($requestedController).'View';

        $controllerObj  = new $controllerName( new $modelName, new $viewName);
//        $viewObj        = new $viewName( $controllerObj, new $modelName );


        // If there is a method - Second parameter
        if ($requestedAction != '')
        {

            var_dump( $_POST);
            print $controllerObj->$requestedAction($requestedParams);

        }

    }else{

        header('HTTP/1.1 404 Not Found');
        die('404 - The file - '.$ctrlPath.' - not found');
        //require the 404 controller and initiate it
        //Display its view
    }
}












exit();


//$servername = "localhost";
//$username = "nfq";
//$password = "nfq";
//$database = "nfq";

$servername = "us-cdbr-iron-east-03.cleardb.net";
$username = "bdcf3ca3dc5a61";
$password = "8bdb1824";
$database = "heroku_c89f304222c3de3";

// --- page redirect logic ---

if (!isset($_SERVER['PATH_INFO']))
{


    echo "Home page";
    exit();
}
var_dump ($_SERVER['PATH_INFO']);
//echo $_SERVER['PATH_INFO'];
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