<?php

    session_start();
    $SESSION['nom'] = "Pouic";
    $SESSION['prenom'] = "Jean";
    $SESSION['age'] = 44;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
        
        <a href="annexe.php">La suite ici !</a>

</body>
</html>