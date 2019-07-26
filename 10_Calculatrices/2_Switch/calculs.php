<html>
<head>
        <title>Affichage du résultat en PHP</title>
</head>
<body>


<?php
if(isset($_GET['nombre1']) AND isset($_GET['choix']) AND isset($_GET['nombre2']))
{
	$nombre1 = htmlspecialchars($_GET['nombre1']);
	$choix = htmlspecialchars($_GET['choix']); 
	$nombre2 = htmlspecialchars($_GET['nombre2']);

	if($nombre1 != NULL AND $nombre2 != NULL)
	{	
			switch($_GET['choix']){
            case "addition":
                $resultat = $nombre1 + $nombre2;
			echo 'La somme de ces deux nombres est ' . $resultat;
			
			echo '<br><br><a href="affichage.php">Retour</a>';
            break;
			
			case "soustraction":
			    $resultat = $nombre1 - $nombre2;
			echo 'La différence de ces deux nombres est ' . $resultat;
			
			echo '<br><br><a href="affichage.php">Retour</a>';
            break;
			
			case "multiplication":
			    $resultat = $nombre1 * $nombre2;
			echo 'Le produit de ces deux nombres est ' . $resultat;
			
			echo '<br><br><a href="affichage.php">Retour</a>';
            break;
		
			case "division":
			    $resultat = $nombre1 / $nombre2;
			echo 'Le quotient de ces deux nombres est ' . $resultat;
			
			echo '<br><br><a href="affichage.php">Retour</a>';
            }

            if($choix == 'division' AND $nombre2 == 0){

            echo 'On peut pas diviser par 0 !';
            
            }
    }
}
	else {
	echo 'Veuillez renseigner tous les champs.';
	    }
?>

</body>
</html>