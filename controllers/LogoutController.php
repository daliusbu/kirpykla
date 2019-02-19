<?php
    session_start();
    session_destroy();
    include (__DIR__ . '/../config/env.php');
    header("location:" . ROOT_URL . NEW_RES_URL);
    exit;
?>