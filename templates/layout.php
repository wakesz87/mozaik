<?php
    require_once "database\dbConfig.php";
    $sql ="SELECT county from location_county";
    $res = mysqli_query($con, $sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
    </style>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Mozaik</title>
</head>

<body>

    <div class="classic">
        <?php
        require_once "header.php";
        require_once "content.php";
        require_once "footer.php";
        ?>
    </div>

</body>

</html>