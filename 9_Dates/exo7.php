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
    
    $StartDate = date('d.m.y');
    $SDST = strtotime($StartDate);
    $Plus20jST = $SDST + 86400 * 20;
    $Plus20j = date('d.m.y', $Plus20jST);
    echo "Nous sommes aujourd'hui le ", $StartDate;
    echo "<br>";
    echo "Dans 20 jours sous serons le ", $Plus20j;

    ?>
</body>
</html>