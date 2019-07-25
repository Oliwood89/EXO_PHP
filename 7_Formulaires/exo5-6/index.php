<?php

    if(isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['genre'])){
        echo "Bonjour ", $_GET['genre'], " ", $_GET['nom'], " ", $_GET['prenom'], " ", ", comment allez-vous ?";
    } else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
    <p>Civilité : 
    <select name="genre" size="1">
        <option>Mr.
        <option>Mme.
        </select></p>
    <p><label>Prenom : <input type="text" name="prenom" /></label></p>
    <p><label>Nom : <input type="text" name="nom" /></label></p>

    <p><input type="submit" /></p>
    </form>
</body>
</html>

<?php
};

?>