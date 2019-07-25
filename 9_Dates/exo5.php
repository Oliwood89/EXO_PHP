<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

    $DateNow = strtotime('now');
    $DateBef = strtotime('16-05-2016');
    echo $DateNow;
    echo "<br>";
    echo $DateBef;
    echo "<br>";
    $Differ = $DateNow - $DateBef;
    echo $Differ;
    $DifferD = round($Differ / 86400);
    echo "<br>";
    echo "Le nombre de jours séparant ces deux dates est de : ", $DifferD, " jours.";
?>
</body>
</html>