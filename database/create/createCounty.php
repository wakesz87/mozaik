<?php


$con = mysqli_connect("localhost", "user", "password", "mozaik_database");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE TABLE location_county
 (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
county VARCHAR(50) NOT NULL
)";

if (mysqli_query($con, $sql)) {
    echo "Sikerült";
}
 else {
    echo "Próbáld újra" . mysqli_error($con);
}

mysqli_close($con);
?>
