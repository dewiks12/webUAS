<?php
    error_reporting(E_ALL); // Set error reporting to show all errors
    session_start();
    $host = "localhost";
    $username = "root";
    $password = "";
    $databasename = "login";
    $connection = mysqli_connect($host, $username, $password) or die (mysqli_error());
    mysqli_select_db($connection, $databasename) or die (mysqli_error($connection));
?>
