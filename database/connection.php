<?php
    $con = mysqli_connect("localhost", "user", "password", "mozaik_database");
   
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>