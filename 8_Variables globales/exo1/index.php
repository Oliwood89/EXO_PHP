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
        <?php

        session_start();
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo "Ceci est votre adresse IP : ", $_SERVER['REMOTE_ADDR'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];

        ?>
</body>
</html>