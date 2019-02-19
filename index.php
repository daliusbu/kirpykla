<?php
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';

if ($url == '/')
{
    require_once __DIR__ . '/models/IndexModel.php';
    require_once __DIR__ . '/controllers/IndexController.php';
    require_once __DIR__ . '/views/IndexView.php';

    $indexModel = New IndexModel();
    $indexController = New IndexController($indexModel);
    $indexView = New IndexView($indexController, $indexModel);

    print $indexView->index();

}else{
    $requestedController = ucFirst($url[0]);
    $requestedAction = isset($url[1])? $url[1] :'';
    $requestedParams = array_slice($url, 2);
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

        if ($requestedAction != '')
        {
            print $controllerObj->$requestedAction($requestedParams);
        }
    }else{

        header('HTTP/1.1 404 Not Found');
        die('404 - Puslapio - '.$ctrlPath.' - nėra');
    }
}

?>