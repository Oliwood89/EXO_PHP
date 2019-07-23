<?php

    $age = (int) readline("Quel est votre âge ?");

    $genre = (string) readline("Quel est votre genre ? Homme ou Femme ?");
    $genre = strtolower ($genre);

    if($age >= 18 && $genre == "femme") {
        echo "Vous êtes une femme et vous êtes majeure.";

    } else if($age < 18 && $genre == "femme") {
        echo "Vous êtes une femme et vous êtes mineure.";

    } else if($age >= 18 && $genre == "homme") {
        echo "Vous êtes un homme et vous êtes majeur.";

    } else if($age < 18 && $genre == "homme") {
        echo "Vous êtes un homme et vous êtes mineur.";
    }
?>