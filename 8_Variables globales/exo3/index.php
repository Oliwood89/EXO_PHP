<?php

session_start();
if(isset($_GET['send'])) {
    setcookie("login", $_GET["login"]);
    setcookie("password", $_GET["password"]);
}

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
        <form action="index.php" method="get">
            Login : <input type = "text" name = "login"><br><br>
            Mot de passe : <input type = "text" name = "password"><br><br>
            <input type = "submit" value = "Envoyer" name = "send">
        </form><br><br>


        <a href="annexe.php">Vos infos ici</a><br><br>

        <a href="annexe2.php">Modifiez vos infos ici</a>
</body>
</html>