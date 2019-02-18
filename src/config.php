<?php
$servername = "us-cdbr-iron-east-03.cleardb.net";
$username = "bdcf3ca3dc5a61";
$password = "8bdb1824";
$database = "heroku_c89f304222c3de3";
$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>