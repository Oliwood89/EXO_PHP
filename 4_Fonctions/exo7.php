<?php

    function pers($age, $genre) {

        if($age >= 18 && $genre == "femme") {
            return "Vous êtes une femme et vous êtes majeure.";
    
        } else if($age < 18 && $genre == "femme") {
            return "Vous êtes une femme et vous êtes mineure.";
    
        } else if($age >= 18 && $genre == "homme") {
            return "Vous êtes un homme et vous êtes majeur.";
    
        } else if($age < 18 && $genre == "homme") {
            return "Vous êtes un homme et vous êtes mineur.";
        }
    }

    $genre = strtolower ($genre);

    echo pers(readline("Quel est votre âge ? "), readline("Quel est votre genre ? Homme ou Femme ? "));