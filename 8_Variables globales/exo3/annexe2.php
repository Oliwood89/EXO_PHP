<?php
    session_start();

?>

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

        if(isset($_COOKIE["login"]) && isset($_COOKIE["password"])) {

            $PassAvt = $_COOKIE["password"];

            echo "Votre ancien mot de passe était <strong>", $PassAvt, "</strong>.", "\n";

            setcookie('password', 'MotDePasse');
            
            echo "Voici votre nouveau mot de passe : <strong>", $_COOKIE["password"], "</strong>.";

        }

?>

</body>
</html>
