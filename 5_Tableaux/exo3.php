<?php

    $ARA = [
        "01" => "Ain",
        "03" => "Allier",
        "07" => "Ardèche",
        "15" => "Cantal",
        "26" => "Drôme",
        "38" => "Isère",
        "42" => "Loire",
        "43" => "Haute-Loire",
        "63" => "Puy-de-Dôme",
        "69" => "Rhône",
        "73" => "Savoie",
        "74" => "Haute-Savoie"
    ];


    
    echo "$ARA[69] \n";

    $ARA[57] = "Moselle, département de Metz";

    foreach($ARA as $cle => $element)
{
    echo 'Le département ' . $element . ' a le numéro ' . "$cle \n";
}

?>