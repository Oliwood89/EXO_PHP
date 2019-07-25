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
    $Moins22jST = $SDST - 86400 * 22;
    $Moins22j = date('d.m.y', $Moins22jST);
    echo "Nous sommes aujourd'hui le ", $StartDate;
    echo "<br>";
    echo "Il y a 22 jours nous étions le ", $Moins22j;

    ?>
</body>
</html>