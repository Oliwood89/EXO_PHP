<?php

    function name($nom, $prenom, $age) {

        return "Bonjour " . "$nom " . "$prenom" . ", vous avez " . "$age" . " ans.";
    }

echo name(readline("Quel est votre nom ? "), readline("Quel est votre prénom ? "), readline("Quel est votre âge ? "));