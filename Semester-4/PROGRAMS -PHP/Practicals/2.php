<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>current date</title>
</head>
<body><h2>
<center>
    <?php
    echo "type 1 : today date is ".date("y/m/d"). "<br>";
    date_default_timezone_set("asia/kolkata");
    echo "type 2 : today date is ".date("d F Y h:i:sa"). "<br>";
    echo "type 3 : current time is ".date("h:i:sa");
    ?></center>
    </h2>
</body>
</html>