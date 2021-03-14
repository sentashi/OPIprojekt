<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "proizvodi";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$conn -> set_charset("utf8");
?>