<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <!-- Javascripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Kirpykla</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="customerDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Rezervacija
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="
                    <?php echo
                    $htp = $_SERVER['HTTPS']!='off' ? 'https://' : 'http://';
                    ($htp.$_SERVER['SERVER_NAME'].'/nfq/index.php/reservation/make') ?>
">Rezervuoti laika</a>
                    <a class="dropdown-item" href="#">Keist rezervacija</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php




                    echo ($_SERVER['HTTPS'].
                        $_SERVER['SERVER_NAME'].'/nfq/index.php/staff/reservations');
                    ?>">
                        <?php
                            echo ($_SERVER['PATH_INFO'])
                        ?>



                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="staffDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    STAFF
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="
                    <?php echo ('http://'.$_SERVER['SERVER_NAME'].'/nfq/index.php/staff/reservations') ?>
">Rezervuoti laika</a>
                    <a class="dropdown-item" href="#">Rezervacijos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php
                    echo ('http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'/../make')
                    ?>">
                        <?php
                        echo ('http://'.$_SERVER['SERVER_NAME'].'......./make')
                        ?>
                    </a>
                </div>
            </li>
<?php

            $a = $_SERVER['HTTPS'];
            var_dump ($a);
          ?>

        </ul>


    </div>
</nav>