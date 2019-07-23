<?php

if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])) // On a le nom et le prénom
{
	echo 'Durée de la période : du ' . $_GET['dateDebut'] . ' au ' . $_GET['dateFin'] . '.';
}
else // Il manque des paramètres, on avertit le visiteur
{
	echo 'Il faut renseigner un nom et un prénom !';
}

?>