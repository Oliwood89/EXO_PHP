<html>
<head>
        <title>Affichage du résultat en PHP</title>
</head>
<body>
<?php
if(isset($_POST['nombre1']) AND isset($_POST['choix']) AND isset($_POST['nombre2']))
{
	$nombre1 = htmlspecialchars($_POST['nombre1']);
	$choix = htmlspecialchars($_POST['choix']); 
	$nombre2 = htmlspecialchars($_POST['nombre2']);

	if($nombre1 != NULL AND $nombre2 != NULL)
	{
		if($choix == 'division' AND $nombre2 == 0)
		{
			echo 'On peut pas diviser par 0 !';
		}
		else 
		{	
			if($choix == 'addition') 
			{
			$resultat = $nombre1 + $nombre2;
			echo 'La somme de ces deux nombres est '.$resultat;
			}
			
			if($choix == 'soustraction')
			{
			$resultat = $nombre1 - $nombre2;
			echo 'La différence de ces deux nombres est '.$resultat;
			}
			
			if($choix == 'multiplication')
			{	
			$resultat = $nombre1 * $nombre2;
			echo 'Le produit de ces deux nombres est '.$resultat;
			}
		
			if($choix == 'division')
			{
			$resultat = $nombre1 / $nombre2;
			echo 'Le quotient de ces deux nombres est '.$resultat;
			}
		}
		}
	else
	{
	echo 'Veuillez renseigner tous les champs.';
	}
}
?>


</body>
</html>