<?php
    $dbHost     = "localhost";
    $dbUserName = "user";
    $dbPassword = "password";
    $dbname     = "mozaik_database";

    $con = mysqli_connect($dbHost, $dbUserName, $dbPassword, $dbname);
   
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>