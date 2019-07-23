<?php

    $age = (int) readline("Quel âge as-tu ?");

    if($age >= 18) {
        
        echo "Tu es majeur.";

    } else {

        echo "Tu n'es pas majeur.";
    }
?>