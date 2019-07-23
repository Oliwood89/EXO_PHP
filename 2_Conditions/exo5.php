<?php

    $genre = (string) readline("Quel est le genre de la personne ?");
    
    $genre = strtolower ($genre);

    if($genre == "femme"){

        echo "C'est une développeuse !";

    } else if($genre == "homme") {

        echo "C'est un développeur !";
    }
?>