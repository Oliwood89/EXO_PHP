<?php

if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['age'])) // On a le nom et le prénom
{
	echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' âgé de ' . $_GET['age'] . ' ans !';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un nom, un prénom et un âge !';
}

?>