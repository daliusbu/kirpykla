<?php

if ($_SERVER["HTTP_HOST"] == 'localhost'){

    //---------------localhost---------------------

    define(ROOT_URL, 'http://' . $_SERVER["HTTP_HOST"] . '/nfq/index.php');


} else {

    //---------------heroku---------------------

    define(ROOT_URL, 'https://' . $_SERVER["HTTP_HOST"] . '/index.php');



}



//---------------general---------------------

define(LOGIN_URL, '/login');
define(LOGOUT_URL, '/logout');
define(NEW_RES_URL, '/reservation/make');
define(RESERVATIONS_URL, '/staff/reservations');
define(STAFF_REMOVE_URL, '/staff/removeres/');
define(CUST_REMOVE_URL, '/reservation/removeres/');
define(UPDATE_URL, '/reservation/update');


?>