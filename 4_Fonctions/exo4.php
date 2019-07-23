<?php

    function pouic($num1=4, $num2=7) {

        if($num1 < $num2) {

            echo "Le premier nombre est plus petit que le second.";
        } 
        else if($num1 > $num2) {

            echo "Le premier nombre est plus grand que le second.";
        }
        else echo "Les deux nombres sont égaux.";

    }

    echo pouic(readline("Entrez un premier nombre :"), readline("Entrez un deuxième nombre :"));